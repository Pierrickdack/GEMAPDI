<?php

namespace App\Http\Controllers;

use App\Models\Utilisateur;
// use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\LogUserRequest;



class UserController extends Controller
{
    public function showDashboard()
    {
        // Vérifiez si l'utilisateur est authentifié
        if (Auth::check()) {
            $user = Auth::user(); // Utilisez Auth::user() pour récupérer l'utilisateur authentifié
            $username = $user->username; // Accéder à la propriété username de l'utilisateur
            return view('index', compact('username'));
        }

        // Redirigez l'utilisateur vers la page de connexion s'il n'est pas authentifié
        return redirect()->route('connexion');
    }


    public function register(LogUserRequest $request) {

        $data = $request -> validated();

        // Vérifier si l'email existe déjà dans la base de données
        $emailExiste = Utilisateur::where('email', $data['email'])->exists();

        if ($emailExiste) {
            toastr()->error('L\'email existe déjà.');

            return redirect()->route('inscription');
        }

        $user = new Utilisateur();
        $user->username = $data['username'];
        $user->email = $data['email'];
        $user->password = Hash::make($data['password']);

        $user->save();
        toastr()->success("Compterr créé avec succès !");

        return redirect()->route('connexion');
    }

    public function login(LogUserRequest $request) {
        $credentials = $request->validated();

        // Authentifiez l'utilisateur en utilisant la table 'utilisateurs'
        $admin = Utilisateur::where('email', $credentials['email'])->first();

        if ($admin && Hash::check($credentials['password'], $admin->password)) {

            $request->session()->regenerate();

            toastr()->success("Connexion réussie !");

            return redirect()->route('dashboard');
        }

        toastr()->error('Identifiants invalides !!');
        return back()->withInput()->withErrors(['email' => 'Identifiants invalides']);
    }

    // public function login(LogUserRequest $request) {

    //     $data = $request -> validated();

    //     $admin = Utilisateur::where('email', $data['email'])->first();

    //     if ($admin && Hash::check($data['password'], $admin->password)) {
    //         $request->session()->regenerate();

    //         toastr()->success("Connexion réussie !");

    //         return redirect()->route('dashboard');
    //     }

    //     toastr()->error('Identifiants invalides !!');
    //     return back()->withInput()->withErrors(['email' => 'Identifiants invalides']);
    // }

    public function logout(LogUserRequest $request) {

        $request->session()->invalidate(); // Invalider la session actuelle
        $request->session()->regenerateToken(); // Régénérer le jeton de session
        toastr()->success('Déconnexion réussie !');
        return redirect()->route('connexion'); // Redirection vers la page de connexion
    }
}
