<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegulamentoController extends Controller
{
    public function diretivas(){
        return view('site.regulamento');
    }
}
