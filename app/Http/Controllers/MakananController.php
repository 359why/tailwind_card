<?php

namespace App\Http\Controllers;

use App\Models\Makanan;

class MakananController extends Controller
{
    public function tampil()
    {
        $makanans = Makanan::all();

        //cek isi data makanans
        //($makanans);

        return view('welcome', ['makanans' => $makanans]);
    }
}