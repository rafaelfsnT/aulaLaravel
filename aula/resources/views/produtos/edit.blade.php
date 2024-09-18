<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AtualizarProdutos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
<nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('produtos.index') }}">Unialfa</a>
        <div class="container">
            <div class="card">
                <div class="card-header">
                    Editar Produto
                </div>
                <div class="card-body">
                    <form action="{{ route('produtos.update', $produtos->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="nome" name="nome" value="{{ $produtos->nome }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="descricao" class="form-label">Descrição</label>
                            <textarea class="form-control" id="descricao" name="descricao">{{ $produtos->descricao }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label for="preco" class="form-label">Preço</label>
                            <input type="number" class="form-control" id="preco" name="preco" value="{{ $produtos->preco }}" step="0.01" required>
                        </div>

                        <div class="mb-3">
                            <label for="estoque" class="form-label">Estoque</label>
                            <input type="number" class="form-control" id="estoque" name="estoque" value="{{ $produtos->estoque }}" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Atualizar</button>
                        <a class="btn btn-danger" href="{{ route('produtos.index') }}">Voltar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</nav>
