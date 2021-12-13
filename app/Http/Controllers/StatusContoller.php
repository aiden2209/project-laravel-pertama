<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatusContoller extends Controller
{
    public function index()
    {
        return view('status.index', [
            'title' => 'Status Server'
        ]);
    }
}
