<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        // ==================2==================
        // - Buat object mahasiswa dengan data dummy (nama, nim, email, jurusan, fakultas, foto)
        // - Kirim object tersebut ke view 'profil'
        $mahasiswa = (object) [
            'nama' => 'Theo',
            'nim' => '102022300278',
            'email' => 'pasqualito@student.telkomuniversity.ac.id',
            'jurusan' => 'S1 Sistem Informasi',
            'fakultas' => 'Rekayasa Industri',
            'foto' => asset('images/foto.jpg')
        ];

        return view('profil', ['mahasiswa' => $mahasiswa]);
    }

}
