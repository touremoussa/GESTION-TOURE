<?php

namespace App\Http\Controllers;
use App\Models\Etudiant;

class EtudiantController{
    function liste(){
        $etudiant = new Etudiant();
        $etudiant->nom = "Moussa";
        $etudiant->idEtudiant = 23;
        dd($etudiant);

    }
}