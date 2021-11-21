<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Serie;
use App\Models\Episodio;

class Temporada extends Model
{
    use HasFactory;

    protected $fillable = ['numero'];

    //Temporada hasMany episodios
    public function episodios(){
        return $this->hasMany(Episodio::class);
    }

    //A via contrária é que Temporada pertence a uma Serie
    public function serie(){
        return $this->belongsTo(Serie::class);
    }
}
