<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PeriksaController extends Controller
{
    //
    public function index()
    {


       if (Auth::user()->role=='dokter'){
        return view('dokter/periksa.index');
       }
       else {
        return view('pasien/periksa.index');
    
         
       }

        // return view('dokter/periksa.index');
    }

}
