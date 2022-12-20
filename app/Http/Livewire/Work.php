<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Work extends Component
{

    public function render()
    {
        $name = [
            'satu' => 'PT Grahamedia Informasi',
            'dua' => 'Wanabiprint',
            'tiga' => 'CV Pustaka Saintech'
        ];


        $jobdesk1 = [
            'Monitoring dan memperbaiki jaringan',
            'Membantu NOC untuk memenuhi kebutuhkannya dalam pekerjaannya',
            'Menangani tiket-tiket komplain dari client',
            'Menyediakan laporan harian berupa kekuatan sinyal dari AP ke Client',
        ];

        $jobdesk2 = [
            'Bertanggung jawab untuk memenuhi kebutuhan konsumen dari awal hingga selesai (dari
            mendesain, mencetak, hingga mereka keluar)',
            'Membuat 20 desain sehari sesuai permintaan konsumen seperti Banner, Flyer, Sertifikat,
            Stempel, dan lain-lain.',
            'Melayani lebih dari 30 pesanan dalam sehari',
            'Bertanggung jawab untuk menjelaskan produk perusahaan secara detail kepada konsumen',
        ];

        $jobdesk3 = [
            'Membangun sebuah topologi jaringan intranet/internet beserta instalasi listriknya',
            'Memasang aplikasi Sistem Manajemen Perpustakaan di Perpustakaan',
            'Melatih pustakawan dalam menggunakan aplikasi Sistem Manajemen Perpustakaan',
            'Melayani klien yang mengalami kesulitan mengoperasikan aplikasi Sistem Manajemen
            Perpustakaan jika ada error.',
        ];

        return view('livewire.work', $name, ['jobdesk1' => $jobdesk1, 'jobdesk2' => $jobdesk2, 'jobdesk3' => $jobdesk3])->extends('layouts.app')->section('content');
    }
}
