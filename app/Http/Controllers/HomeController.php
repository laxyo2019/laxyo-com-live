<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
        {
            if(Auth::user()->site_code == 001){
                return view('admin.laxyo.home_laxyo');
            }
            else{
                return view('admin.yolax.home_yolax');
            }
         }

}
