<x-layout>

    <!-- Conteúdo Principal -->
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <!-- Link de Voltar -->
                <a href="{{ route('books.index') }}" class="text-decoration-none mb-4 d-inline-block">← Voltar para Livros</a>

                <!-- Card de Detalhes do Livro -->
                <div class="card shadow-sm">
                    <!-- Cabeçalho com gradiente -->
                    <div class="card-header bg-primary text-white py-4">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <h1 class="h2 mb-1">{{ $book->title }}</h1>
                                <p class="lead mb-0 opacity-75">por {{ $book->author }}</p>
                            </div>
                            <div class="d-flex gap-2">
                                <a href="{{ route('books.edit', $book) }}" class="btn btn-light">Editar</a>
                                <button class="btn btn-danger">Excluir</button>
                            </div>
                        </div>
                    </div>

                    <!-- Grade de Detalhes -->
                    <div class="card-body p-4">
                        <div class="row g-4">
                            <!-- Coluna Esquerda - Capa -->
                            <div class="col-md-4">
                                <div class="text-center">
                                    <img src="https://placehold.co/300x450/6c757d/ffffff?text=Capa+do+Livro" alt="Capa do Livro" class="img-fluid rounded shadow-sm mb-3" style="max-height: 400px;">
                                </div>
                            </div>

                            <!-- Coluna Direita - Informações -->
                            <div class="col-md-8">
                                <h2 class="h5 mb-3">Informações do Livro</h2>

                                <table class="table table-sm table-borderless">
                                    <tr>
                                        <td class="text-muted fw-medium w-40 pe-3">Gênero:</td>
                                        <td><span class="badge bg-primary bg-opacity-10 text-primary">{{ $book->genre->name }}</span></td>
                                    </tr>
                                    <tr>
                                        <td class="text-muted fw-medium pe-3">Ano de publicação:</td>
                                        <td>{{ $book->published_year }}</td>
                                    </tr>
                                </table>
                            </div>

                            <!-- Descrição -->
                            <div class="col-12">
                                <h2 class="h5 mb-3">Sobre Este Livro</h2>
                                <p class="mb-3">
                                    {{ $book->resume }}
                                </p>
                            </div>
                        </div>

                        <!-- Botões de Ação -->
                        <div class="mt-4 pt-3 border-top d-flex gap-3">
                            <a href="{{ route('books.index') }}" class="btn btn-primary px-4">Voltar para a Lista</a>
                            <a href="book-create.html" class="btn btn-success px-4">Editar Livro</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layout>


