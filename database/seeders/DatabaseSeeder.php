<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //creamos usuario de prueba
        User::factory(7)->create();
        /* 
        llamar al CategorySeeder para crearnos los categorias 
        antes de crear los posts (LOGICA) 
        */
        $this->call(CategorySeeder::class);
        //Creamos los post
        Storage::deleteDirectory('posts');
        Storage::makeDirectory('posts');
        Post::factory(50)->create();
    }
}
