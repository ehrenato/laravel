<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Serie;
use App\Models\Temporada;

class Episodio extends Model
{
    use HasFactory;

    protected $fillable = ['numero'];

    //Episodio pertence a temporada
    public function temporada(){
        return $this->belongsTo(Temporada::class);
    }
}
