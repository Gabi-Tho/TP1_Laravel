<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;
use App\Models\Ville;
use App\Models\User;


class UserController extends Controller
{
    public function index()
    {

        // $etudiants = Etudiant::all();
        return view('user.index');
        
    }

        /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('user.show');
    }




    public function create(){

        $villes = Ville::all();
        return view('user.create', ['villes'=>$villes]);
    }


    public function store(Request $request)
    {
        $newUser = User::create([

            'name'  => $request->nom,
            'addresse' => $request->addresse,
            'phone' => $request->phone,
            'email' => $request->email,
            'date_naissance' => $request->date_naissance,
            'ville_id' => $request->ville_id,

        ]);

        // return $newBlogPost->id;
        // return redirect(route('etudiant.show',$newEtudiant->id));
    }

}
