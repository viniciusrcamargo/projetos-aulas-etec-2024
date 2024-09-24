<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Cadastro de Produtos</title>
</head>
<body>
<div class="card-body mt-5">
    <form method="POST" action="{{ route('produtos.update', $produtos->id) }}" >
        @csrf
        @method('PUT')
        <div class="container">
            <div class="mb-3 row">
                <input type="text" hidden name="id" value="{{$produtos->id}}">
                <div class="col-8">
                    <label for="nome" class="form-label">Nome do Produto</label>
                    <input type="text" class="form-control" id="nome" name="nome" value="{{ $produtos->nome }}">
                </div>

                
                <div class="col-4">
                    <label for="categoria" class="form-label">Categoria</label>
                    <select class="form-select" aria-label="Large select example" name="categoria_id">
                        @if (isset($categorias))
                            @foreach ($categorias as $categoria)
                            <option value="{{$categoria->id}}" id="categoria_id">{{ $categoria->nome }}</option>
                            @endforeach
                        @endif
                    </select>
                    @error('categoria_id')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="mb-3 col-8">
                    <label for="descricao" class="form-label">Descrição</label>
                    <input type="text" class="form-control" id="descricao" rows="3" name="descricao" value="{{$produtos->descricao}}">
                </div>

                <div class="mb-3 col-4">
                    <label for="preco" class="form-label">Preço</label>
                    <input type="text" class="form-control" id="preco" rows="3" name="preco" value="{{$produtos->preco}}">
                </div>
            </div>
            <button type="submit" class="btn btn-outline-warning btn-lg">Alterar</button>
        </div>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>