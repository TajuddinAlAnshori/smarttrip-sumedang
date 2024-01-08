<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Package;

use App\Http\Requests\Admin\PackageRequest;

use DataTables;

class PackageController extends Controller
{
    public function json(){
        $data = Package::all();

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
        return view('pages.admin.package.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.package.edit_or_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PackageRequest $request)
    {
        $data = $request->all();

        if(isset($data['photo'])){
            $data['photo']          = $request->file('photo')->store(
                'assets/image/package', 'public'
            );
        }

        $create_package = Package::create($data);
        
        if($create_package) {
            $request->session()->flash('alert-success', 'Package '.$data['name'].' berhasil ditambahkan');
        } else {
            $request->session()->flash('alert-failed', 'Package '.$data['name'].' gagal ditambahkan');
        }

        return redirect()->route('package.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Package::findOrFail($id);

        return view('pages.admin.package.edit_or_create', [
            'item'  => $item 
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PackageRequest $request, $id)
    {
        $data = $request->all();

        if(isset($data['photo'])){
            $data['photo']          = $request->file('photo')->store(
                'assets/image/package', 'public'
            );
        }

        $item = Package::findOrFail($id);

        if($item->update($data)) {
            $request->session()->flash('alert-success', 'Package '.$item->name.' berhasil diupdate');
        } else {
            $request->session()->flash('alert-failed', 'Package '.$item->name.' gagal diupdate');
        }
        
        return redirect()->route('package.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Package::findOrFail($id);
        
        if($item->delete()) {
            session()->flash('alert-success', 'Package '.$item->name.' berhasil dihapus!');
        } else {
            session()->flash('alert-failed', 'Package '.$item->name.' gagal dihapus');
        }

        return redirect()->route('package.index');
    }
}
