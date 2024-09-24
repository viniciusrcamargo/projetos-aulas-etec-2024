<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Cadastro de Produtos</title>
</head>
<body>
<div class="container mt-5">
<h1>Lista de Produtos</h1>
<table class="table mt-3">
        <thead>
        <tr class="table-warning">
            <th scope="col">Id</th>
            <th scope="col">Nome</th>
            <th scope="col">Descrição</th>
            <th scope="col">Categoria</th>
            <th scope="col">Preço</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @if (@isset($produtos))
            @foreach ($produtos as $prod)
                <tr>
                    <th>{{ $prod->id }}</th>
                    <th>{{ $prod->nome }}</th>
                    <th>{{ $prod->descricao }}</th>
                    <th>{{ $prod->categoria }}</th>
                    <th>R$ {{ $prod->preco }}</th>
                    <th><a href="{{ route('produtos.edit', $prod->id) }}" class="btn btn-primary">Editar</a>
                        <form action="{{ route('produtos.destroy', $prod->id) }}" method="post" >
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">
                                Delete
                            </button>
                        </form>
                    </th>
                </tr>
            @endforeach
        @else
            <tr>
                <th>Sem dados</th>
            </tr>
        @endif
        </tbody>
    </table>
<a href="{{ route('produtos.create')}}" class="btn btn-lg btn-outline-success mt-4">Add Produto</a>
<a href="{{ route('categorias.create') }}" class="btn btn-lg btn-outline-warning mt-4">Add Categoria</a>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>