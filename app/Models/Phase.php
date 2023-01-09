<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phase extends Model
{
    protected $table = 'phase';
    protected $primaryKey = 'id';
    protected $fillable = ['nom', 'duree', 'propriete','projet_id'];

    public function projet()
{ 
    return $this->belongsTo(Projet::class); 
}


}


