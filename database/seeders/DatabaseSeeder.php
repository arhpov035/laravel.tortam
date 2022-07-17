<?php

namespace Database\Seeders;

use App\Models\AdminUser;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        \App\Models\User::factory(10)->create();
        Product::factory(10)->create();

        AdminUser::factory(1)->create([
            "name" => "Admin",
            "email" => "arhipov035@gmail.com",
            "password" => bcrypt("12345"),
        ]);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
