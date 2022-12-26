<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InscricoesController extends Controller
{
    public function inscricao(){
        return view('site.inscricao');
    }
}
