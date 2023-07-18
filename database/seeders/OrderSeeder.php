<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('order')->insert([
            'order_nama' => 'bowo',
            'status_code' => '1',
            'order_no' => '1',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('order')->insert([
            'order_nama' => 'coki',
            'status_code' => '2',
            'order_no' => '2',
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
