<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function home(){
        return view('frontend.home');
    }

    public function aboutus(){
        return view('frontend.aboutus');
    }

    public function contactus(){
        return view('frontend.contactus');
    }

    public function registration(){
        return view('frontend.registration');
    }

    public function submission(){
        return view('frontend.submission');
    }

    public function callforpapers(){
        return view('frontend.callforpapers');
    }
}
