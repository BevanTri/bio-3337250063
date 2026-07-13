<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        $mahasiswa = [
            'nama'     => 'Bevan Tri Ramadiyas',
            'nim'      => '33337250063',
            'prodi'    => 'Informatika',
            'angkatan' => 2025,
            'ipk'      => 3.88,
            'email'    => 'bevantriramadiyas@gmail.com',
            'github'   => 'https://github.com/bevantri',
            'skill'    => ['HTML', 'CSS', 'JavaScript', 'Python', 'PHP', 'Laravel', 'Git'],
            'bio'      => 'Mahasiswa Informatika UNTIRTA yang semangat belajar teknologi web.',
        ];

        return view('profil', compact('mahasiswa'));
    }
}