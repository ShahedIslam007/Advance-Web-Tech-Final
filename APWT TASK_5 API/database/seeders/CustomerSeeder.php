<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Admin::factory()->create([
            'id' => '1',
            'Name' => 'Shahed',
            'Phone' => '01821800405',
            'Email' => 'shahedislam600@gmailcom',
            'Address' => 'Block-F Road-13 Bashundhora R/A',
        ]);
    }
}
