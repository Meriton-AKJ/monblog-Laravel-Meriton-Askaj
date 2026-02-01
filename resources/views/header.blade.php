<!DOCTYPE html>
<html lang="fr">

<head>
  <title>Mon blog laravel</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="css/style.css" rel="stylesheet">
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
        <div class="container-fluid">
            <span class="navbar-brand text-white">Mon Blog</span>

            <!-- pour un utilisateur pas connecté -->
            @guest
            <form action="{{ route('login') }}" method="POST" class="d-flex">
                @csrf
                <input type="text" name="loginusername" placeholder="Nom d'utilisateur" class="form-control me-2" style="width: 180px;">
                <input type="password" name="loginpassword" placeholder="Mot de passe" class="form-control me-2" style="width: 180px;">
                <button type="submit" class="btn btn-success">Se connecter</button>
            </form>
            @endguest

            <!-- pour un utilisateur connecté -->
            @auth
            <div class="d-flex align-items-center">
                <a href="{{ route('articles.create') }}" class="btn btn-sm btn-success me-2">Créer un article</a>

                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-sm btn-secondary">Se déconnecter</button>
                </form>
            </div>
            @endauth
        </div>
    </nav>
  </header>
</body>
</html>