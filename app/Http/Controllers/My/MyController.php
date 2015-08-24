<?php

namespace App\Http\Controllers\My;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class MyController extends Controller
{

    /**
     * MyController constructor.
     */
    public function __construct()
    {
        $this->middleware('menus.my');
        View::share('user', auth()->user());
    }
}
