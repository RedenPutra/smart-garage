<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Garasi;

class GarasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $garasi = new Garasi;
        $garasi->nama_garasi = "Garasi 001";
        $garasi->lokasi = "Sukabumi | Area A";
        $garasi->harga_sewa = 30000;
        $garasi->deskripsi = "Lorem Ipsum Dolor Sit Amet";
        $garasi->status = "tersedia";
        $garasi->save();

        $garasi = new Garasi;
        $garasi->nama_garasi = "Garasi 002";
        $garasi->lokasi = "Sukabumi | Area A";
        $garasi->harga_sewa = 30000;
        $garasi->deskripsi = "Lorem Ipsum Dolor Sit Amet";
        $garasi->status = "booked";
        $garasi->save();

        $garasi = new Garasi;
        $garasi->nama_garasi = "Garasi 001";
        $garasi->lokasi = "Sukabumi | Area B";
        $garasi->harga_sewa = 35000;
        $garasi->deskripsi = "Lorem Ipsum Dolor Sit Amet";
        $garasi->status = "tersedia";
        $garasi->save();

        $garasi = new Garasi;
        $garasi->nama_garasi = "Garasi 001";
        $garasi->lokasi = "Sukabumi | Area C";
        $garasi->harga_sewa = 40000;
        $garasi->deskripsi = "Lorem Ipsum Dolor Sit Amet";
        $garasi->status = "tersedia";
        $garasi->save();

        $garasi = new Garasi;
        $garasi->nama_garasi = "Garasi 003";
        $garasi->lokasi = "Sukabumi | Area A";
        $garasi->harga_sewa = 30000;
        $garasi->deskripsi = "Lorem Ipsum Dolor Sit Amet";
        $garasi->status = "booked";
        $garasi->save();

        $garasi = new Garasi;
        $garasi->nama_garasi = "Garasi 002";
        $garasi->lokasi = "Sukabumi | Area B";
        $garasi->harga_sewa = 35000;
        $garasi->deskripsi = "Lorem Ipsum Dolor Sit Amet";
        $garasi->status = "rented";
        $garasi->save();
    }
}