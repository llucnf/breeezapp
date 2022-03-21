<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ingrediente;
class Plato extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
       'imageeee'
    ];

    public function ingredientes()
    {
        return $this->belongsToMany(Ingrediente::class);
    }
}
