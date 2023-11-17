<?php

namespace Database\Seeders;

use App\Models\Restoran;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RestoranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $restoran = new Restoran();
        $restoran->fill([
        'nama_restoran' => 'MANGROVE RESTORAN',
        'nama_pemilik' => 'Ibu Indah',
        'alamat' => 'Kuprik,Kec. Semangga, Kabupaten Merauke, Papua Selatan',
        'kontak' => '0812-4876-1325'
        ]);
        $restoran->save();
    }

    
}
