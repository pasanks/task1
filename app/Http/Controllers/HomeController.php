<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;

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

    public function getProfile(){

        $data['data'] = DB::table('users')->where('id', '=', Auth::user()->id)->get();

        if(count($data)>0){

            return view('pages.userprofile',$data);
        }
        else
        {
            return view('pages.userprofile');
        }}


}
