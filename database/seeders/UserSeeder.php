<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       User::create([
        'nama'=>'Dr.John Doe',
        'alamat'=> 'Jl. Dokter No. 1',
        'no_hp'=> '081234567890',
        'email' => 'johndoe@gmail.com',
        'role'=> 'dokter',
        'password'=> Hash::make('password')
       ]);
       User::create([
        'nama'=>'Jane Doe',
        'alamat'=>'Jl. Pasien No. 1',
        'no_hp'=> '081234567890',
        'email'=>'Jane@gmail.com',
        'role'=>'pasien',
        'password'=> Hash::make('password')
       ]);
    }
}
