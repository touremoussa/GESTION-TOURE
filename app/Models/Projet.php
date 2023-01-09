<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    protected $table = 'projets';
    protected $primaryKey = 'id';
    protected $fillable = ['nom', 'description', 'datedebut','datefin'];


    public function phases() 
{ 
    return $this->hasMany(Phase::class); 
}
}


