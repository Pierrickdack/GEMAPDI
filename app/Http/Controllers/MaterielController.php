<?php

namespace App\Http\Controllers;

use App\Models\Materiel;
use Illuminate\Http\Request;
use App\Http\Requests\MaterielRequest;

class MaterielController extends Controller
{

    public function index()
    {
        $materiels = Materiel::all();
        return view('tables.export-table', compact('materiels'));
    }

    public function store(MaterielRequest $request)
    {
        // Validation des données du formulaire
        $data = $request->validated();

        //dd($data);

        // // Traitement de l'upload de l'image
        // if ($request->hasFile('image')) {
        //     $image = $request->file('image');
        //     $imageName = time().'.'.$image->extension();
        //     $image->move(public_path('images'), $imageName);
        // } else {
        // //     $imageName = null; // Aucune image n'a été téléchargée
        // }

        $materiel = new Materiel();

        $materiel->code_mat = $request->input('code_mat');
        $materiel->nom_mat = $request->input('nom_mat');
        $materiel->description = $request->input('description');
        $materiel->date_acq = $request->input('date_acq');
        $materiel->quantite = $request->input('quantite');

        // Vérification si une image a été téléchargée
        // if (!is_null($imageName)) {
        //     $materiel->image = $imageName;
        // }

        // Sauvegarde du matériel dans la base de données
        $materiel->save();

        // Redirection avec un message de succès
        return redirect()->route('materiels.index')->with('success', 'Le matériel a été enregistré avec succès.');
    }

    public function destroy($id) {

        $materiel = Materiel::find($id);

        if (!$materiel) {
            return redirect()->route('materiels.index')->with('error', 'matériel non trouvé.');
        }
        $materiel->delete();

        return redirect()->route('materiels.index')->with('success', 'Le matériel a été supprimé avec succès.');
    }


    public function emprunt(Request $request)
    {
        // Valider les données du formulaire d'emprunt
        $request->validate([
            'emprunteur' => 'required|string',
            'telephone' => 'nullable|string',
            'date_emprunt' => 'required|date',
            'date_retour_prevue' => 'required|date',
            'heure_emprunt' => 'required|date_format:H:i',
            'heure_retour' => 'required|date_format:H:i',
            'materiel_id' => 'required|exists:materiels,id',
            // Ajoutez d'autres règles de validation au besoin
        ]);

        // Créer une nouvelle entrée dans la table des emprunts ou de l'historique des emprunts
        $emprunt = new Emprunt();
        $emprunt->emprunteur = $request->emprunteur;
        $emprunt->telephone = $request->telephone;
        $emprunt->date_emprunt = $request->date_emprunt;
        $emprunt->date_retour_prevue = $request->date_retour_prevue;
        $emprunt->heure_emprunt = $request->heure_emprunt;
        $emprunt->heure_retour = $request->heure_retour;
        $emprunt->materiel_id = $request->materiel_id;
        $emprunt->save();

        // Rediriger ou afficher un message de succès
    }



}
