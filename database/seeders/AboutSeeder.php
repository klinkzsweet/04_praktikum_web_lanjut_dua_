<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =[
            [
                'namamobil' => 'Ferari',
                'deskripsi' => 'Ferrari adalah sebuah produsen mobil super dan mobil balap asal Italia berperforma tinggi yang berbasis di Maranello, Italia.'
            ],
            [
                'namamobil' => 'Honda',
                'deskripsi' => 'Honda didirikan pada 30 September 1948 oleh Soichiro Honda. Honda merupakan produsen sepeda motor terbesar di dunia sejak 1959,[3][4] dan juga produsen mesin pembakaran dalam terbesar dengan produksi lebih dari 14 juta unit tiap tahun.[5'
            ],
            [
                'namamobil' => 'Toyota',
                'deskripsi' => 'Toyota adalah sebuah pabrikan mobil yang berasal dari Jepang, yang berpusat di Toyota, Aichi. Saat ini, Toyota merupakan pabrikan penghasil mobil terbesar di dunia.'
            ]
        ];
        DB::table('abouts') -> insert($data);
    }
}
