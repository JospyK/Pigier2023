<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Etudiant extends Model
{
    use HasFactory;

    protected $fillable = [
        "nom", "prenom", "age"
    ];

    /**
     * Recuperer la filiere de l''etudiant
     */
    public function filiere()
    {
        return $this->belongsTo(Filiere::class);
    }


    /**
     * Recuperer les modules dun etudiants
     */
    public function modules()
    {
        return $this->belongsToMany(Module::class);
    }


}
