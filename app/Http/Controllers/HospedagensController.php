<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HospedagensController extends Controller
{
    public function hospedagem(){
        return view('site.hospedagem');
    }
}
