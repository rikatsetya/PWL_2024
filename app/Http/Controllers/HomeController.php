<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // praktikum

    // public function index() {
    //     return 'Selamat Datang (dari controller)';
    // }

    // Soal

    public function index()
    {
        return view('welcome');
    }
}
