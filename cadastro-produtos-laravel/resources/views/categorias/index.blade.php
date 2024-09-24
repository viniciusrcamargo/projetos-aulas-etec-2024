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
    <h1>Lista de Categorias</h1>
<div class="card-body ">
    <ul class="list-group" >
        @foreach ($categorias as $categoria)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{$categoria->nome}}

                <span class="d-flex">
                    <a href="{{ route('categorias.edit', $categoria->id) }}" class="btn btn-primary btn-sm">Editar</a>

                    <form action="{{ route('categorias.destroy', $categoria->id)}}" method="post" class="ms-2">
                    @csrf
                        @method('DELETE')
                    <button class="btn btn-danger btn-sm">
                        Deletar
                    </button>
                </form>
                </span>

            </li>
        @endforeach
    </ul>
</div>
<a href="{{route('categorias.create')}}" class="btn btn-lg btn-outline-success mt-3">Adicionar</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>