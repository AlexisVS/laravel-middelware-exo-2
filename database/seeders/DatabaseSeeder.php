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
        // User::factory()->count(10)->create();
        User::factory()->count(1)->state([
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin@gmail.com'),
            'role_id' => 1,
        ])->create();
        User::factory()->has(
            Article::factory()
                ->count(3)
                ->state(function (array $attributes, User $user) {
                    return ['user_id' => $user->id];
                })
        )
            ->count(1)->state([
                'email' => 'webmaster@gmail.com',
                'password' => bcrypt('webmaster@gmail.com'),
                'role_id' => 3,
            ])->create();
            
        User::factory()->count(1)->state([
            'email' => 'editeur@gmail.com',
            'password' => bcrypt('editeur@gmail.com'),
            'role_id' => 4,
        ])->create();
        User::factory()->count(1)->state([
            'email' => 'member@gmail.com',
            'password' => bcrypt('member@gmail.com'),
        ])->create();
        // Article::factory()->count(50)->create();
        User::factory()
            ->has(
                Article::factory()
                    ->count(3)
                    ->state(function (array $attributes, User $user) {
                        return ['user_id' => $user->id];
                    })
            )
            ->count(50)->create();
    }
}
