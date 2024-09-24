<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Cadastro de Produtos</title>
</head>
<body>
<div class="card-body ">
    <form method="POST" action="{{ route('categorias.update', $categoria->id) }}" >
        @csrf
        @method('PUT')
        <div class="container">
            <div class="mb-3 row">
                <div class="col-12">
                    <label for="nome" class="form-label">Nome da categoria</label>
                    <input type="text" class="form-control " id="nome" placeholder="Banco de dados..." name="nome"
                    @isset($categoria)
                        value="{{ $categoria->nome }}"
                    @endisset
                    >
                </div>
            </div>
            <button type="submit" class="btn btn-outline-warning btn-lg">Alterar</button>
        </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>