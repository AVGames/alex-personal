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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function inicio()
    {
        return view('inicio');
    }
    public function hs(){
        return view('hs');
    }

    public function lol(){
        return view('lol');
    }

    public function Infamous() {
        return view('Infamous');
    }

    public function logout(){ 
        return view('incio');
    }
}
