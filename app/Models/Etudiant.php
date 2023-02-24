<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Etudiant extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'addresse',
        'phone',
        'email',
        'date_naissance',
        'ville_id'
    ];

    public function etudiantHasVille(){

        return $this->hasOne('App\Models\Ville', 'id', 'ville_id');
    }


}
