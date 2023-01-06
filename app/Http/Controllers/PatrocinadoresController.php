<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatrocinadoresController extends Controller
{
    public function patrocinio(){
        return view('site.patrocinadores');
    }
}
