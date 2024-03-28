<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formController extends Controller
{
    public function showInscription() {
        return view("inscription");
    }

    function store(Request $request) {
        // return $request;
        // dd($request);

        $request->validate([
            "nom_complet"=>"required|max:15|min:5",
            "age"=>"required",
            "diplome"=>"required",
            "date_obtention"=>"required|befor:20",
            "cv"=>"file|mimes:pdf|max:1000",
            "email"=>"email:strict"
        ], [
           "nom_complet.required"=>"le champ est obligatoire",
           "nom_complet.max"=>"vous devez saisi moins de 15 caractere" 
        ]);

        return "good";
    }
}
