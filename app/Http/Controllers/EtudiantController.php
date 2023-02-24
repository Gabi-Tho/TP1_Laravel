<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\Ville;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EtudiantController extends Controller
{
    
    public function index()
    {

        // $etudiants = Etudiant::all();
        $etudiants = Etudiant::select()->paginate(10);
        return view('etudiant.index', ['etudiants'=>$etudiants]);
        
    }

    public function create(){

        $villes = Ville::all();
        return view('etudiant.create', ['villes'=>$villes]);
    }

    //button functionality
    public function update(Request $request, Etudiant $etudiant){

        $etudiant->update([

            'nom'  => $request->nom,
            'addresse' => $request->addresse,
            'phone' => $request->phone,
            'email' => $request->email,
            'date_naissance' => $request->date_naissance,
            'ville_id' => $request->ville_id

        ]);

        return redirect(route('etudiant.show',$etudiant->id));
        
    }


    public function show(Etudiant $etudiant){
        
        $villes = Ville::all();
        return view('etudiant.show', ['etudiant'=>$etudiant, 'villes'=>$villes]);
        
    }


    //the link to the route
    public function edit(Etudiant $etudiant){
        
        $villes = Ville::all();
        return view('etudiant.edit', ['etudiant'=>$etudiant, 'villes'=>$villes]);
    }

    public function destroy(Etudiant $etudiant){

        $etudiant->delete();
        $etudiants = Etudiant::all();
        return redirect(route('etudiant.index', ['etudiants'=>$etudiants]));
        
    }

    public function store(Request $request)
    {
        $newEtudiant = Etudiant::create([

            'nom'  => $request->nom,
            'addresse' => $request->addresse,
            'phone' => $request->phone,
            'email' => $request->email,
            'date_naissance' => $request->date_naissance,
            'ville_id' => $request->ville_id,


        ]);

        // return $newBlogPost->id;
        return redirect(route('etudiant.show',$newEtudiant->id));
    }




    

}
