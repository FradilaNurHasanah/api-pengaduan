<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            'id'=> 1,
        	'nik' => 3469802000,
        	'nama' => 'Fradila Nur Hasanah',
        	'telp' => '082230535512',
            'username' => '@fradila.com',
            'password' => bcrypt('000000'),
        	'level' => 'admin'
        ]);
    }
}
