<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()
            ->count(15)
            ->create();

            /**DB::table('users')->insert([
                'name' => Str::random(10),
                'email' => Str::random(10).'@exemple.fr',
                'password' => Hash::make('password'),
            ]);*/
    }
}
