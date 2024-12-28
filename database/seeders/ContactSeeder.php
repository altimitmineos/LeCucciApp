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
                'full_name' => 'Axel Baskoro',
                'phone_number'=> '08558784667',
                'address' => 'Cipete Raya',
                'email' => 'Axel_Baskoro@gmail.com',
                'subject' => 'Bau',
                'message' => 'Gatau kenapa bau cuciannya'
            ],
            [
                'full_name' => 'Alhamdi',
                'phone_number'=> '0855878466723',
                'address' => 'Sebelah Carino',
                'email' => 'hamdi1445@gmail.com',
                'subject' => 'Wangi',
                'message' => 'Gatau kenapa baunya wangi'
            ],
        ];
        DB::table('contacts') -> insert($contacts);
    }
}
