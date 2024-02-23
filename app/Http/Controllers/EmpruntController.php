<?php

namespace App\Http\Controllers;

use App\Models\Materiel;
use Illuminate\Http\Request;

class EmpruntController extends Controller
{

    public function create()
    {
        $materiels = Materiel::pluck('nom_mat', 'id'); // Récupère les noms des matériels avec leurs identifiants
        return view('form.emprunt', compact('materiels'));
    }

}
