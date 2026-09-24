<div class="card h-100 shadow-sm">
    <img src="{{ Storage::url($book->cover) }}" alt="Capa do Livro" class="card-img-top" style="height: 200px; object-fit: cover;">
        <div class="card-body">
            <h5 class="card-title">{{ $book->title }}</h5>
            <p class="text-muted mb-2">{{ $book->author }}</p>
            <p class="small text-muted mb-3">Publicado: {{ $book->published_year }}</p>
            <a href="{{ route('books.show', $book) }}" class="card-link">Ver Detalhes →</a>
        </div>
</div>
