<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Prodect; // استيراد نموذج Prodect
use Database\Factories\ProdectFactory; // استيراد Factory الخاص بـ Prodect

class ProdectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // \App\Models\Prodects::factory(5)->create(); 
    }
}
