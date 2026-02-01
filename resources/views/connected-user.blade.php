@include('header')

<div class="container mt-5">
    <h1>Bienvenue, {{ Auth::user()->username }} !</h1>
    
    <div class="alert alert-success">
        Vous êtes connecté avec succès.
    </div>

    <div class="card mt-4">
        <div class="card-body">
            <h5 class="card-title">Que voulez-vous faire ?</h5>
            <a href="{{ route('articles.create') }}" class="btn btn-primary">Créer un nouvel article</a>
            <a href="{{ route('articles.my') }}" class="btn btn-secondary">Voir mes articles</a>
        </div>
    </div>
</div>

@include('footer')