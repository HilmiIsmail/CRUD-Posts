<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categorias = [
            'Deporte' => 'Categoría relacionada con  el deporte',
            'Anime' => 'Categoría relacionada con el anime y manga',
            'Tecnología' => 'Categoría relacionada con la tecnología',
            'Lectura' => 'Categoría relacionada con la lectura',
            'Comida' => 'Categoría relacionada con la cocina y comida',
        ];
        //Crear las  categorías en la base de datos
        foreach ($categorias as $nombre => $descripcion) {
            Category::create(
                ['nombre' => $nombre, 'descripcion' => $descripcion]
                // 'nombre'  es una columna de la tabla categories
                // 'descripción' es otra columna de la tabla categories
            );
        }
    }
}
