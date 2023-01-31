<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        
    }

    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
    /** home dashboard */
    public function index()
    {
        
        return view('dashboard.home');
    }

    public function testRoute()
    {
        //Helper::create(); Start instance

        //Helper::connect(); Load the QRcode to connect

        //Helper::sendText(5514996010303, 'hello world'); Number to send the message, and the text to message


    }


}
