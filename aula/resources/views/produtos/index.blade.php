<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista de Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Produtos</a>
            <a class="btn btn-success" href="{{ route('clients.index')}}">Ver Clientes</a>
            <table class="table">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Nome</td>
                        <td>Descrição</td>
                        <td>Preço</td>
                        <td>Estoque</td>
                        <td>Ações</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($produtos as $produtos)
                        <tr>
                            <td>{{ $produtos->id}} </td>
                            <td>
                              <strong>  {{ $produtos->nome}} </strong>
                            </td>
                            <td>{{ $produtos->descricao}}</td>
                            <td>{{ $produtos->preco}}</td>
                            <td>{{ $produtos->estoque}}</td>
                            <td> <a class="btn btn-primary" href="{{route('produtos.show', $produtos)}}">Visualizar</a></td>
                            <td>     <a class="btn btn-warning" href="{{ route('produtos.edit', $produtos->id) }}">Editar</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
            
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>