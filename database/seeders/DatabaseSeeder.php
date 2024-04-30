<?php

namespace Database\Seeders;
use Database\Factories\CategoryFactory;
use App\Models\Category;
use Database\Seeders\CategorySeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        //$this->call(ProdectSeeder::class);use App\Models\category;
  
         $this->call(CategorySeeder::class);
    }
}
