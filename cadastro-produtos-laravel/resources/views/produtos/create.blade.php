<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Cadastro de Produtos</title>
</head>
<body>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const errorAlert = document.getElementById('error-alert');
        if (errorAlert) {
            setTimeout(() => {
                errorAlert.style.display = 'none';
            }, 3000); // Esconde a div após 5 segundos
        }
    });
</script>

@if ($errors->any())
    <div class="alert alert-danger" id="error-alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="card-body mt-5">
    <form method="POST" action="{{ route('produtos.store') }}" >
        @csrf
        <div class="container">
            <div class="mb-3 row">
                <div class="col-8">
                    <label for="nome" class="form-label">Nome do Produto</label>
                    <input type="text" class="form-control" id="nome" name="nome" required>
                </div>

                
                <div class="col-4">
                    <label for="categoria" class="form-label">Categoria</label>
                    <select class="form-select" aria-label="Large select example" name="categoria_id" id="categoria_id">
                        <option selected disabled>Selecione a categoria</option>
                        @if (isset($categorias))
                        @foreach ($categorias as $categoria)
                        <option value="{{$categoria->id}}" id="categoria_id" required>{{$categoria->nome}}</option>
                        @endforeach
                        @endif
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="mb-3 col-8">
                    <label for="descricao" class="form-label">Descrição</label>
                    <input type="text" class="form-control" id="descricao" rows="3" name="descricao" required>
                </div>

                <div class="mb-3 col-4">
                    <label for="preco" class="form-label">Preço</label>
                    <input type="text" class="form-control" id="preco" rows="3" name="preco" required>
                </div>
            </div>
            <button type="submit" class="btn btn-outline-success btn-lg">Salvar</button>
        </div>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>