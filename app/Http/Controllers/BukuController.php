<?php

namespace App\Http\Controllers;

use App\Models\Buku; // Memanggil Model Buku (Koki)
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        // 1. Pelayan menyiapkan data buku 
        // (Biasanya data ini diambil dari Database/Model, tapi agar mudah kita ketik manual dulu)
        $daftar_buku = [
            'Belajar Laravel itu Mudah',
            'Misteri Programmer Nyasar',
            'Tutorial Membuat Web Dalam Sehari'
        ];

        // 2. Pelayan membawa data tersebut ke View (Piring) yang bernama 'buku'
        return view('buku', compact('daftar_buku'));
    }
}