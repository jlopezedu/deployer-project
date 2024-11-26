<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstadiController extends Controller
{
    public function index() {
        $estadis = [ 
            'Camp Nou',
            'Cívitas Metropolitano',
            'Alfredo Di Stéfano'
        ];
        return view('estadis.index', compact('estadis'));
    }

    public function create() {
        
        return view('estadis.create');
    }
}
