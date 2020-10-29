<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
   public function mostrarForm(){
   	return view('mestre');
   }
     public function paises(){
   	return view('paises');
   }
   public function contacto(){
   	return view('contacto');
   }
   public function Localidade(){
   	return view('Localidade');
   }
}

