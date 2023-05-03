<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('portfolios')->insert([
            'user_id' => 1,
            'template_id' => 1,
            'p_name' => Str::random(10),
            'p_url' => Str::random(10).".getmyportfolio.space",
        ]);
    }
}
