
<link rel="stylesheet" href="/css/style.css">
<h1>Liste des articles</h1>

<a href="/articles/create">Créer un article</a>

@foreach ($articles as $article)
    <h2>{{ $article->title }}</h2>
    <p>{{ $article->content }}</p>
@endforeach



