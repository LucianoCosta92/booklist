<x-layout>
    <!-- Conteúdo Principal -->
    <div class="container py-5">
        <!-- Cabeçalho -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h1 class="mb-1">Coleção de Livros</h1>
                <p class="text-muted mb-0">Gerencie sua biblioteca de livros</p>
            </div>
            <a href="{{ route('books.create') }}" class="btn btn-primary btn-lg">
                + Adicionar Novo Livro
            </a>
        </div>

        <!-- Tabela de Livros -->
        <div class="card shadow-sm">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th scope="col">Livro</th>
                            <th scope="col">Autor</th>
                            <th scope="col">Gênero</th>
                            <th scope="col">Publicação</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($books as $book)
                        <tr>
                            <td>
                                <div class="fw-medium">{{ $book->title }}</div>
                            </td>
                            <td>{{ $book->author }}</td>
                            <td><span class="badge bg-primary bg-opacity-10 text-primary">{{ $book->genre }}</span></td>
                            <td class="text-muted">{{ $book->year_release }}</td>
                            <td>
                                <a href="{{ route('books.show', $book) }}" class="btn btn-sm btn-outline-primary me-1">Ver</a>
                                <a href="{{ route('books.edit', $book) }}" class="btn btn-sm btn-outline-success me-1">Editar</a>
                                <button class="btn btn-sm btn-outline-danger">Excluir</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Paginação -->
            <div class="card-footer d-flex justify-content-between align-items-center bg-light">
                <span class="text-muted">Mostrando 1 a 5 de 24 resultados</span>
                <nav>
                    <ul class="pagination pagination-sm mb-0">
                        <li class="page-item disabled"><a class="page-link" href="#">Anterior</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Próximo</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</x-layout>




