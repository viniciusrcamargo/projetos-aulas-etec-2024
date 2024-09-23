<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <title>Edição de Usuário</title>
</head>
<body>
<div class="container mt-5">
        <form action="{{ route('contatos.update', $contato->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group mb-2">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" placeholder="Seu Nome" name="nome" value="{{$contato->nome}}">
            </div>
            <div class="form-group mb-2">
                <label for="telefone">Telefone</label>
                <input type="text" class="form-control" placeholder="(xx)xxxxx-xxxx" name="telefone" value="{{$contato->telefone}}">
            </div>
            <div class="form-group mb-2">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" placeholder="email@email.com" name="email" value="{{$contato->email}}">
            </div>
            <button type="submit" class="btn btn-primary btn-lg" >Editar</button>
        </form>
</div>
</body>
</html>