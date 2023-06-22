<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InputController extends Controller
{
    public function index(){
        return view('input');
    } 

    public function hasil(Request $request){
         $data =  [
            'nama' => $request->input('nama'),
            'email' => $request->input('email'),
            'lokasi' => $request->input('lokasi'),
            'jk' => $request->input('jk'),
            'skill' => $request->input('skill'),
            
            
        ];
        return view('hasil', compact('data'));
}
}