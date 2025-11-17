<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
   public function index() {
      $nome = "Maria";
      $idade = "20";
      $arr = [1,2,3,4,5];
  
      return view('welcome',
         [
         'nome' => $nome,
         'idade' => $idade,
         'profissao' => "Estudante",
         'arr' => $arr
         ]);
   }

   public function create() {
      return view('events.create');
   }

   public function products(){
      
      $busca = request('search');

      return view('products', ['busca' => $busca]);
   }
}
