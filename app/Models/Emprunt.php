<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emprunt extends Model
{
    protected $fillable = [
        'emprunteur',
        'telephone',
        'date_emprunt',
        'date_retour_prevue',
        'heure_emprunt',
        'heure_retour',
        'materiel_id'
    ];

    // Relation avec le matériel
    public function materiel()
    {
        return $this->belongsTo(Materiel::class);
    }
}
