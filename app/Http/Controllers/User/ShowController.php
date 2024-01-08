<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function show()
    {
        $data_package=Package::all();

        return view('frontend.user.landingpage', compact('data_package')) ;
    }
    public function mitra()
    {
        $main=Package::all();

        return view('frontend.user.mitra');
    }
}
