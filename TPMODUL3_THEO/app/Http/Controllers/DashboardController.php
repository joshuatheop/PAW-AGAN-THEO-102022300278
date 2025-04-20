<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // ==================2==================
        // - Set timezone ke Asia/Jakarta
        date_default_timezone_set('Asia/Jakarta');
        // - Buat variabel nama, jam, waktu
        $namaMahasiswa = 'Praktikan EAD'; 
        $currentHour = date('H');
        // - Tentukan $salam berdasarkan jam (pagi, siang, sore, malam)
        if ($currentHour >= 5 && $currentHour < 12) {
            $salam = 'Selamat Pagi';
        } elseif ($currentHour >= 12 && $currentHour < 15) {
            $salam = 'Selamat Siang';
        } elseif ($currentHour >= 15 && $currentHour < 18) {
            $salam = 'Selamat Sore';
        } else {
            $salam = 'Selamat Malam';
        }
        // - Panggil fungsi getTanggal()
        $tanggalAkses = $this->getTanggal();
        // - Kirim data ke view 'dashboard' 
        return view('dashboard', [
            'salam' => $salam,
            'namaMahasiswa' => $namaMahasiswa,
            'waktuAkses' => date('H:i:s'), 
            'tanggalAkses' => $tanggalAkses,
            'logoPath' => asset('images/logo-ead.png'), 
        ]);
    }

    private function getTanggal()
    {
        // ==================3==================
        // - Kembalikan tanggal sekarang dalam format dd-mm-yyyy
        return date('d-m-Y');
    }
}