<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class MlController extends Controller
{
    public function index()
    {
        return view('buy.index', [
            'title' => 'Order Mobile Legends'
        ]);
    }
    public function store(Request $request)
   {
       
       $validatedData = $request->validate([
        'userid' => 'required|min:5|max:255',
        'serverid' => 'required|min:3|max:7',
        'nominal' => 'required',
        'payment' => 'required',
        'whatsapp' => 'required|min:10|max:255',
    ]);

    
    $request->session()->flash('success','Registrasi Anda Berhasil Silahkan login Untuk Melanjutkan');
    
    return redirect('/buy');
   }

   

}
