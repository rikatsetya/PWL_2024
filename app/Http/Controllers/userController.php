<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function user(){
        return view('jobsheet2.user')
            ->with('id', '22')
            ->with('nama', 'Rikat Setya Gusti');
    }
}
