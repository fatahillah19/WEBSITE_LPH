<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Menampilkan Halaman Tentang Kami (Profil)
     */
    public function about()
    {
        $data = [
            'title' => 'Tentang LPH Global Halal Center',
            'tagline' => 'Professional, Terpercaya, untuk Halal yang Mendunia', // [cite: 47]
            'visi' => 'Menjadi Lembaga Pemeriksa Halal (LPH) yang professional, terpercaya, dan berdaya saing global dalam mendukung terwujudnya ekosistem halal yang unggul di Indonesia', // [cite: 38]
            'misi' => [
                'Menyelenggarakan pemeriksaan dan audit halal secara independen, objektif, dan sesuai standar yang berlaku', // [cite: 40]
                'Memberikan layanan halal yang cepat, tepat, dan transparan kepada pelaku usaha', // [cite: 41]
                'Meningkatkan kompetensi dan integritas auditor halal melalui pelatihan dan pengembangan berkelanjutan', // [cite: 42]
                'Mendorong edukasi dan literasi halal kepada masyarakat dan pelaku usaha', // [cite: 43]
                'Membangun sinergi dengan pemerintah, Lembaga dan industri dalam penguatan ekosistem halal', // [cite: 44]
                'Mendukung percepatan implementasi Sistem Jaminan Produk Halal (SJPH) di Indonesia' // [cite: 45]
            ]
        ];

        return view('about', $data);
    }
}
