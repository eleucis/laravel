<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\STR;

class BlogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        for($i=0;$i<=10;$i++){
        DB::table('blogs')->insert([
            'title'=> Str::random(10),
            'description'=> Str::random(20),
            'status'=> 1,
            'created_at' => date('Y-m-d H:i:s')
        ]);}
    }
}
