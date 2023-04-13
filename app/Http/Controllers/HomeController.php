<?php

namespace App\Http\Controllers;

use App\Models\Advice;
use App\Models\Article;
use App\Models\Hospital;
use App\Models\Illness;
use App\Models\Medicine;
use App\Models\User;
use Faker\Provider\Medical;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function redirect()
    {
        $data['user'] = User::all();
        $data['hos'] = Hospital::all();
        $data['med'] = Medicine::all();
        $data['ill'] = Illness::all();
        $data['adv'] = Advice::all();
        $data['art'] = Article::all();

        // $total = Hospital::count();z


        $admin = User::where('usertype', 1)->first();

        // dd($data);
        $usertype = Auth::user()->usertype;
        if ($usertype == '1') {
            return view('admin.layouts.home', compact('admin'), $data);
        } else {
            // dd($data);
            return view('frontend.main');
        }
    }

    public function hm()
    {
        $data['user'] = User::all();
        $data['hos'] = Hospital::all();
        $data['med'] = Medicine::all();
        $data['ill'] = Illness::all();
        $data['adv'] = Advice::all();
        $data['art'] = Article::all();

        return view('frontend.main')->with($data);
    }

    public function med()
    {
        $data['med'] = Medicine::all();

        return view('frontend.medicine.med')->with($data);
    }
    public function article()
    {
        $data['art'] = Article::all();

        return view('frontend.article')->with($data);
    }

    public function illness()
    {
        $data['ill'] = Illness::all();

        return view('frontend.illness.illness')->with($data);
    }

    public function hospital_details()
    {
        $data['hos'] = Hospital::all();
        return view('frontend.hospitalDetails.hospital')->with($data);
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
