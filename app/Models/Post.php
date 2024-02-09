<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['titulo', 'contenido', 'disponible', 'imagen', 'user_id', 'category_id'];

    //indicamos la relacion 1:N con Category
    public function category(): BelongsTo //category en minuscula (1->N) 
    {
        return $this->belongsTo(Category::class);
    }
    //indicamos la relacion 1:N con User
    public function user(): BelongsTo //user en minuscula (1->N) 
    {
        return $this->belongsTo(User::class);
    }
    //Accessors y Mutators
    public function titulo(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => ucfirst($value) // Convierte a mayuscula el primer caracter del titulo
        );
    }
    public function contenido(): Attribute
    {
        return  Attribute::make(set: fn ($value) => ucfirst($value),);
    }
}
