<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang (dari controller)';
    }

    public function about() {
        return 'NIM: 2241760053 Nama: Rikat Setya Gusti (dari controller)';
    }

    public function articles($id) {
        return 'Halaman Artikel dengan ID '.$id . '(dari controller)';
    }
}
