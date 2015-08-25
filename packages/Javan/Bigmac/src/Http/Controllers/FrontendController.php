<?php

namespace Javan\Bigmac\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class FrontendController extends Controller
{

    public function home(Request $request)
    {
        return view('frontend.home');
    }

    public function gallery(Request $request)
    {
        return view('frontend.gallery');
    }

    public function mechanism(Request $request)
    {
        return view('frontend.mechanism');
    }

    public function prize(Request $request)
    {
        return view('frontend.prize');
    }

}
