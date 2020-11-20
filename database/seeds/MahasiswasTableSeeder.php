<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class MahasiswasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswas')->insert([
            ['name'=>'Wenny'], 
            ['name'=>'Valen'],
            ['name'=>'Putri'], 
            ['name'=>'Shinta'],
            ['name'=>'Shania'], 
            ['name'=>'Erica']
        ]); 
    }
}
