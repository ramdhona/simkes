<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        if(Auth::user()->role === 'dokter') {
            return redirect('/dokter');
        } elseif (Auth::user()->role === 'pasien') {
            return redirect('/pasien');
        } else {
            return redirect('/');
        }
        // return view('home');
    }
    public function dokter()
    {
        return view('dokter.index');
    }
    public function pasien()
    {
        return view('pasien.index');
    }
    public function actionlogout()
    {
        Auth::logout();
        return redirect('/');
    }
}
