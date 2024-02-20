<?php

namespace App\Http\Controllers;

use App\Models\Utilisateur;
// use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
// use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\LogUserRequest;

class UserController extends Controller
{
    public function register(LogUserRequest $request) {
        
        $data = $request -> validated();

        // Vérifier si l'email existe déjà dans la base de données
        $emailExiste = Utilisateur::where('email', $data['email'])->exists();

        if ($emailExiste) {
            return redirect()->route('inscription')->with('error', 'L\'email existe déjà.');
        }

        $user = new Utilisateur();
        $user->family_name = $data['family_name'];
        $user->surname = $data['surname'];
        $user->email = $data['email'];
        $user->password = Hash::make($data['password']);
        
        $user->save();

        // Rediriger l'utilisateur vers une page de confirmation ou une autre page appropriée
        return redirect()->route('connexion')->with('success', 'Votre compte a été créé avec succès!');
    }

    public function login(LogUserRequest $request) {

        $data = $request -> validated();

        $admin = Utilisateur::where('email', $data['email'])->first();

        if ($admin && Hash::check($data['password'], $admin->password)) {
            $request->session()->regenerate();
            //toastr()->success("Connexion réussie !");


            return redirect()->route('dashboard');
        }

        //toastr()->error('Identifiants invalides !!');
        return back()->withInput()->withErrors(['email' => 'Identifiants invalides']);
    }

    public function logout(Request $request) {

        $request->session()->invalidate(); // Invalider la session actuelle
        $request->session()->regenerateToken(); // Régénérer le jeton de session
        toastr()->success('Déconnexion réussie !');
        return redirect()->route('connexion'); // Redirection vers la page de connexion
    }
}
