<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nama' => 'Admin ',
            'username' => 'admin',
            'password' => Hash::make('123'),
            'nip' => '123',
            'jenis_kelamin' => 'Laki-laki',
            'tempat_lahir' => 'banjarbaru',
            'tanggal_lahir' => '1997-05-05',
            'alamat' => 'banjarbaru',
            'no_hp' => '08777777777',
            'role' => '1',
        ]);

        DB::table('users')->insert([
            'nama' => 'Widyaiswara ',
            'username' => 'widyaiswara',
            'password' => Hash::make('123'),
            'nip' => '12345',
            'jenis_kelamin' => 'Perempuan',
            'tempat_lahir' => 'banjarbaru',
            'tanggal_lahir' => '1997-05-05',
            'alamat' => 'banjarbaru',
            'no_hp' => '08777777777',
            'role' => '2',
        ]);

    }
}
