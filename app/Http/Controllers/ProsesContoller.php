<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProsesContoller extends Controller
{
    public function index()
    {
        return view('order.proses.index', [
            'title' => 'Delina | Checkout'
        ]);
    }
   public function store()
   {
    return view('order.proses.index');
       
   }
}
