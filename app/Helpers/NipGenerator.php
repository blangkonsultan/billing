<?php

namespace App\Helpers;

use App\Models\Dokter;


class NipGenerator
{

    public function __construct()
    {
    }
    public function generate(array $data): string
    {
        $nilaiAwal = Dokter::latest()->first();
        // dd($nilaiAwal);
        $counter = $nilaiAwal ? $nilaiAwal['id'] + 1 : 1;
        $dob = str_replace("-", "", $data['dob']);
        $id = str_pad($counter, '3', '0', STR_PAD_LEFT);
        $nip = "{$dob}.{$id}";
       ;
        return $nip;
    }
}
