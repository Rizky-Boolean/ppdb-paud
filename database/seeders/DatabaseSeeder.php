<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $dataAdmin = [
            'name' => 'Yunus Febriansyah',
            'email' => 'yunus@gmail.com',
            'password' => bcrypt('admin')
        ];
        User::create($dataAdmin);

    }
}
