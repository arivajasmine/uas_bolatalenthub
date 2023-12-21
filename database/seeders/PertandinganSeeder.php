<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PertandinganSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        // Daftar kompetisi
        $kompetisiIds = DB::table('kompetisi')->pluck('ID_Kompetisi');

        // Daftar tim
        $timIds = DB::table('tim')->pluck('ID_Tim');

        foreach (range(1, 10) as $index) {
            DB::table('pertandingan')->insert([
                'ID_Kompetisi' => $faker->randomElement($kompetisiIds),
                'Tanggal_Pertandingan' => $faker->date,
                'Tim_Tuan_Rumah' => $faker->randomElement($timIds),
                'Tim_Tamu' => $faker->randomElement($timIds),
                'Skor_Tuan_Rumah' => $faker->numberBetween(0, 5),
                'Skor_Tamu' => $faker->numberBetween(0, 5),
                'Jumlah_Penonton' => $faker->numberBetween(1000, 50000),
            ]);
        }
    }
}
