<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class etudiants extends Model
{
    use HasFactory;
    protected $table = "etudiants";
    public function filieres(){
        return $this->belongsTo(Filiere::class,'id_filiere','id');
    }
}
