<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contacts = [
            [
                'Full Name' => 'Axel Baskoro',
                'Phone Number'=> '08558784667',
                'Address' => 'Cipete Raya',
                'Email' => 'Axel_Baskoro@gmail.com',
                'Subject' => 'Bau',
                'Message' => 'Gatau kenapa bau cuciannya'
            ],
            [
                'Full Name' => 'Alhamdi',
                'Phone Number'=> '0855878466723',
                'Address' => 'Sebelah Carino',
                'Email' => 'hamdi1445@gmail.com',
                'Subject' => 'Wangi',
                'Message' => 'Gatau kenapa baunya wangi'
            ],
        ];
        DB::table('contacts') -> insert($contacts);
    }
}
