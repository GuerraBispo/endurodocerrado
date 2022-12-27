<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inscricoe;

class InscricoeController extends Controller
{
    public function create(){
        return view('site.inscricao');        
    }

    public function store(Request $request){
      Inscricoe::create($request->all());
      return redirect()->route('site.formulario');
    }
}
