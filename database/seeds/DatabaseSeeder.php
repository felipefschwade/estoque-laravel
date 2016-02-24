<?php

use Illuminate\Database\Seeder;
use estoque\Categoria;

class DatabaseSeeder extends Seeder 
{
    public function run() {
        $this->call(CategoriaTableSeeder::class);
    }
}
