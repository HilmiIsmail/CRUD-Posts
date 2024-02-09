<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{

    use HasFactory;
    protected $fillable = ['nombre', 'descripcion'];
    //indicamos la relacion 1:N con Post
    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }
    //Accessors y Mutators 
    public function nombre(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => ucfirst($value) //guardar el nombre en DB con la primera  letra en mayuscula
        );
    }
    public function descripcion(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => ucfirst($value) //guardar la descripcion en DB con la primera  letra en mayuscula
        );
    }
}
