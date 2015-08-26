<?php

namespace Javan\Bigmac\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BuilderController extends Controller
{

    public function step1(Request $request)
    {
        return view('builder.step1');
    }

}
