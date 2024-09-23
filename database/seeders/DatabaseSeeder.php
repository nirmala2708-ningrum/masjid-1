<?php

namespace Database\Seeders;
  
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       user::create([
        'name' =>'Admin',
        'email'=>'admin@gmail.com',
        'password'=> Hash::make('admin123')
        ]);
    }
}
