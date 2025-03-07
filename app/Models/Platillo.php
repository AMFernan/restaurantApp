<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
Use App\Models\Categoria;
Use App\Models\Ingrediente;

class Platillo extends Model
{
    use HasFactory;
    
    protected $table = 'platillos';
    protected $fillable = ['nombre','precio','categoria_id'];

    public function categoria() {
        return $this->belongsTo(Categoria::class);
    }

    public function ingredientes() {
        return $this->belongsToMany(Ingrediente::class, 'platillo_ingredientes');
    }
}
