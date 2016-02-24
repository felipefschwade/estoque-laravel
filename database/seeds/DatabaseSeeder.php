<?php

use Illuminate\Database\Seeder;
use estoque\Categoria;

class DatabaseSeeder extends Seeder 
{
    public function run() {
        $this->call(CategoriaTableSeeder::class);
    }
}

class CategoriaTableSeedr extends Seeder {
	public function run() {
		Categoria::create(['nome' => "Eletrônicos"]);
		Categoria::create(['nome' => "Eletrodomésticos"]);
		Categoria::create(['nome' => "Esportes"]);
		Categoria::create(['nome' => "Brinquedos"]);
	}
}