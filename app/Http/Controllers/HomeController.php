<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function redirect()
    {
        $usertype = Auth::user()->usertype;
        if ($usertype == '1') {
            return view('admin.layouts.home');
        } else {
            return view('frontend.main');
        }
    }

    public function med()
    {

        return view('frontend.medicine.med');
    }

    public function illness()
    {

        return view('frontend.illness.illness');
    }

    public function bir()
    {

        return view('frontend.hospitalDetails.bir');
    }

    public function bpkhs()
    {
        return view('frontend.hospitalDetails.bpkhs');
    }

    public function chitwan()
    {
        return view('frontend.hospitalDetails.chitwan');
    }

    public function maharaj()
    {
        return view('frontend.hospitalDetails.maharaj');
    }

    public function narayani()
    {
        return view('frontend.hospitalDetails.narayani');
    }

    public function nepalgunj()
    {
        return view('frontend.hospitalDetails.nepalgunj');
    }
}
