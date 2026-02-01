<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExampleController extends Controller
{
    public function homepage()
    {
        // Si l'utilisateur est connecté, envoie vers connected-user
        if (Auth::check()) {
            return view('connected-user');
        }
        
        // Sinon, affiche la page d'accueil avec inscription
        return view('homepage');
    }

    public function createArticle()
    {
        return view('create-article'); 
    }
}