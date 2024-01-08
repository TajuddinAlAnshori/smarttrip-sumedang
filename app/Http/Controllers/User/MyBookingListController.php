<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;

use App\Models\BookingList;
use App\Models\Package;
use App\Models\PackageStatus;
use App\Models\User;

use App\Jobs\SendEmail;

use App\Http\Requests\User\MyBookingListRequest;

use DataTables;

class MyBookingListController extends Controller
{
    public function json(){
        $data = BookingList::where('user_id', Auth::user()->id)->with([
            'package'
        ]);

        return DataTables::of($data)
        ->addIndexColumn()
        ->make(true);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.user.my-booking-list.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $packages = Package::orderBy('name')->get();

        return view('pages.user.my-booking-list.create', [
            'packages' => $packages,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MyBookingListRequest $request)
    {
        $data               = $request->all();
        $data['user_id']    = Auth::user()->id;
        $data['status']     = 'PENDING';

        $package               = Package::select('name')->where('id', $data['package_id'])->firstOrFail();

        if(
            BookingList::where([
                ['date', '=', $data['date']],
                ['package_id', '=', $data['package_id']],
                ['status', '=', 'DISETUJUI'],
            ])
            ->whereBetween('start_time', [$data['start_time'], $data['end_time']])
            ->count() <= 0 || 
            BookingList::where([
                ['date', '=', $data['date']],
                ['package_id', '=', $data['package_id']],
                ['status', '=', 'DISETUJUI'],
            ])
            ->whereBetween('end_time', [$data['start_time'], $data['end_time']])
            ->count() <= 0 ||
            BookingList::where([
                ['date', '=', $data['date']],
                ['package_id', '=', $data['package_id']],
                ['start_time', '<=', $data['start_time']],
                ['end_time', '>=', $data['end_time']],
                ['status', '=', 'DISETUJUI'],
            ])->count() <= 0
        ) {
            if(BookingList::create($data)) {
                $request->session()->flash('alert-success', 'Booking Package '.$package->name.' berhasil ditambahkan');
                
                $user_name          = $this->getUserName();
                $user_email         = $this->getUserEmail();
                
                $admin      = $this->getAdminData();
                $status     = 'DIBUAT';

                $to_role    = 'USER';

                // use URL::to('/') for the url value

                // URL::to('/my-booking-list)
                dispatch(new SendEmail($user_email, $user_name, $package->name, $data['date'], $data['start_time'], $data['end_time'], $data['purpose'], $to_role, $user_name, 'https://google.com', $status));

                $to_role    = 'ADMIN';

                // URL::to('/admin/booking-list)
                dispatch(new SendEmail($admin->email, $user_name, $package->name, $data['date'], $data['start_time'], $data['end_time'], $data['purpose'], $to_role, $admin->name, 'https://google.com', $status));

            } else {
                $request->session()->flash('alert-failed', 'Booking Package '.$package->name.' gagal ditambahkan');
                return redirect()->route('my-booking-list.create');
            }
        } else {
            $request->session()->flash('alert-failed', 'Package '.$package->name.' di waktu itu sudah dibooking');
            return redirect()->route('my-booking-list.create');
        }

        return redirect()->route('my-booking-list.index');
    }

    /**
     * Cancel the specified data.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function cancel($id)
    {
        $item           = BookingList::findOrFail($id);
        $data['status'] = 'BATAL';

        $package               = Package::select('name')->where('id', $item->package_id)->firstOrFail();

        if($item->update($data)) {
            session()->flash('alert-success', 'Booking Package '.$package->name.' berhasil dibatalkan');

            $user_name          = $this->getUserName();
            $user_email         = $this->getUserEmail();

            $admin      = $this->getAdminData();
            $status     = $data['status'];

            $to_role    = 'USER';

            dispatch(new SendEmail($user_email, $user_name, $package->name, $item->date, $item->start_time, $item->end_time, $item->purpose, $to_role, $user_name, 'https://google.com', $status));
            
            $to_role    = 'ADMIN';

            dispatch(new SendEmail($admin->email, $user_name, $package->name, $item->date, $item->start_time, $item->end_time, $item->purpose, $to_role, $admin->name, 'https://google.com', $status));
            
        } else {
            session()->flash('alert-failed', 'Booking Package '.$package->name.' gagal dibatalkan');
        }
        
        return redirect()->route('my-booking-list.index');
    }

    public function getAdminData() {
        return User::select('name','email')->where('role', 'ADMIN')->firstOrFail();
    }

    public function getUserName() {
        return Auth::user()->name;
    }

    public function getUserEmail() {
        return Auth::user()->email;
    }
}
