<?php

namespace Database\Seeders;

use App\Models\DaftarMakananMinuman;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DaftarMakananMinumanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $makanan = new DaftarMakananMinuman();
        $makanan->fill([
            'nama' => 'Nasi Ayam goreng/Bakar',
            'harga' => 25000
        ]);
        $makanan->save();
        $bebek = new DaftarMakananMinuman();
        $bebek->fill([
            'nama' => 'Nasi Bebek Goreng/Bakar',
            'harga' => 40000
        ]);
        $bebek->save();
        $rawon = new DaftarMakananMinuman();
        $rawon->fill([
            'nama' => 'Rawon',
            'harga' => 28000
        ]);
        $rawon->save();
       $susu = new DaftarMakananMinuman();
       $susu->fill([
            'nama' => 'Susu Sapi Murni',
            'harga' => 15000
        ]);
       $susu->save();
        $jeruk = new DaftarMakananMinuman();
        $jeruk->fill([
            'nama' => 'Es jeruk',
            'harga' => 7000
        ]);
        $jeruk->save();
        $teh = new DaftarMakananMinuman();
        $teh->fill([
            'nama' => 'Es Teh',
            'harga' => 7000
        ]);
        $teh->save();
        
    }
}
