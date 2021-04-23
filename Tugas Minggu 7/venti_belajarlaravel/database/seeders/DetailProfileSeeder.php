<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //
         DB::table('detail_profile')->insert([
        'address' => 'Lumajang',
        'nomor_tlp' => '081246412176',
        'ttl' => '2002-03-10',
        'foto' => 'picture.png',
    ]);
 }
}