<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function index($nome = "Anônimo")
    {
      //return view('test.index', ['nome'=>$nome]); //,[compact('name')]
      return view('test.index', compact('nome'));
    }


    public function notas()
    {
      $notas = ['Nota 1', 'Nota 2', 'Anotação 3','Nota 4','Nota 5'];
      return view('test.notas', compact('notas'));
    }

}
