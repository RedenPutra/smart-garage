<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Rental;

class RentalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $rental = new Rental;
        $rental->garasi_id = 1;
        $rental->renter_id = 3;
        $rental->tanggal_mulai = "2024-01-02";
        $rental->tanggal_akhir = "2024-01-03";
        $rental->total_harga_sewa = 30000;
        $rental->status = "selesai";
        $rental->save();

        $rental = new Rental;
        $rental->garasi_id = 2;
        $rental->renter_id = 3;
        $rental->tanggal_mulai = "2024-01-05";
        $rental->tanggal_akhir = "2024-01-07";
        $rental->total_harga_sewa = 60000;
        $rental->status = "selesai";
        $rental->save();
    }
}