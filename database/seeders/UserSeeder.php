<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
                    'name' => 'Javier de Jesús',
                    'email' => 'javis_1255@hotmail.com',
                    'password' => bcrypt('1010235-4')
                ]);

        $user->assignRole('Admin');

        User::factory(99)->create();
    }
}
