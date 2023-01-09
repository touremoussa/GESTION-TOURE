<?php

namespace App\Http\Controllers;
use App\Models\Cours;

class CoursController{
    function liste(){
        $cours1 = new Cours();
        $cours2 = new Cours();
        $cours3 = new Cours();
        $cours1->id = "1";
        $cours2->id = "2";
        $cours3->id = "3";
        $cours1->nom = "JAVA";
        $cours2->nom = "PHP";
        $cours3->nom = "JavaScript";
        $cours1->duree = "80";
        $cours2->duree = "60";
        $cours3->duree = "100";

        $tab_cours = [$cours1,$cours2,$cours3];

        return view('liste',['cours' =>$tab_cours]);
        

    }
}