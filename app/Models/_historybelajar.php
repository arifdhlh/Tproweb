<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class kunjungan
{
    // use HasFactory;
    private static $isi_tamu = [
        [
            "id" => "20/05/2022",
            "nama" => "Yoga Prawira",
            "kelas" => "X TKJ 1",
            "keperluan" => "istirahat karena pingsan saat upacara",
            "masuk" => "07.00 WITA",
            "keluar" => "-"
        ],
        [
            "id" => "20/05/2022",
            "nama" => "Dhaffa Rian",
            "kelas" => "XI RPL 2",
            "keperluan" => "ukur tinggi dan timbang berat bedan",
            "masuk" => "10.00 WITA",
            "keluar" => "-"
        ]
    ];

    public static function all()
    {
        return collect(self::$isi_tamu);
    }

}