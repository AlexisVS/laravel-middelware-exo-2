<?php

namespace Database\Seeders;

use App\Models\Article;
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
        $this->call([
            RoleSeeder::class,
        ]);
        User::factory()->count(10)->create();
        User::factory()->count(1)->state([
            'email' => 'admin@gmail.com',
            'password'=> bcrypt('admin@gmail.com'),
            'role_id' => 1,
        ])->create();
        User::factory()->count(1)->state([
            'email' => 'member@gmail.com',
            'password'=> bcrypt('member@gmail.com'),
        ])->create();
        Article::factory()->count(50)->create();


    }
}
