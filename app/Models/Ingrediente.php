<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Plato;
class Ingrediente extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'category',
        'cantidad',
        'precio'
       
    ];
    public function platos()
    {
        return $this->belongsToMany(Plato::class);
    }
}
