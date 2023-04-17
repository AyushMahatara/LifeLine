<?php

namespace App\Http\Controllers;

use App\Models\Advice;
use App\Models\Article;
use App\Models\Hospital;
use App\Models\Illness;
use App\Models\Medicine;
use App\Models\User;
use App\Notifications\SendEmailNotification;
use Faker\Provider\Medical;
use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification as FacadesNotification;

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
            return view('frontend.main')->with($data);
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

    public function send_email($id)
    {
        $data = User::find($id);
        return view('admin.layouts.sendEmail', compact('data'));
    }

    public function send_user_email(Request $request, $id)
    {
        $data = User::find($id);

        $details = [
            'greeting' => $request->greeting,
            'body' => $request->body,
            'button' => $request->button,
            'url' => $request->url,
        ];
        // Notification::send($data, new SendEmailNotification($details));
        FacadesNotification::send($data, new SendEmailNotification($details));

        return redirect()->back()->with('message', 'Email send Successfully');
    }

    // yo

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
