<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    // Afficher le formulaire de création
    public function create()
    {
        return view('create-article');
    }

    // Sauvegarder l'article
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        Article::create([
            'user_id' => Auth::id(),
            'title' => $validated['title'],
            'content' => $validated['content'],
        ]);

        return redirect()->route('homepage')->with('success', 'Article publié avec succès !');
    }

    // NOUVELLE MÉTHODE : Afficher tous les articles de l'utilisateur connecté
    public function myArticles()
    {
        // Récupère tous les articles de l'utilisateur connecté
        $articles = Article::where('user_id', Auth::id())->get();
        
        // Envoie les articles à la vue
        return view('my-articles', ['articles' => $articles]);
    }
}