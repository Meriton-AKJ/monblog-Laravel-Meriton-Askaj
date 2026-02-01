@include('header')

<div class="container mt-5">
    <h1>Mes articles</h1>

    @if($articles->isEmpty())
        <div class="alert alert-info">
            Vous n'avez pas encore publié d'articles.
            <a href="{{ route('articles.create') }}">Créer un article</a>
        </div>
    @else
        <div class="row">
            @foreach($articles as $article)
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $article->title }}</h5>
                            <p class="card-text">{{ Str::limit($article->content, 150) }}</p>
                            <small class="text-muted">Publié le {{ $article->created_at->format('d/m/Y') }}</small>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>

@include('footer')