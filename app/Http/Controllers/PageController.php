<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
    }

    public function about() {
        return 'NIM : 1941720008 . Nama : Rizkina Hayyuni Putri';
    }
    
    public function articles($id) {
        return 'Halaman Artikel dengan ID '.$id;
    }
}
