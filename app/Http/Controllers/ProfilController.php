<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function show()
    {
        $profil = [
            'name' => 'Tio Adi Baskoro',
            'email' => 'tioadi@example.com',
            'phone' => '081234567890'
        ];

        // kirim data profil ke welcome.blade.php
        return view('users/pages/profil', compact('profil'));
    }
}
