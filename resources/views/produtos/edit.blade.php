<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Editar Produto</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
  <form id="update-form" action="{{ route('alterar_produto', ['id' => $produtos->id])   }}" method="POST">
    @csrf
    <label for="nome">Nome</label> <br>
    <input type="text" name="nome" id="nome" value="{{ $produtos->nome }}"> <br>
    <label for="custo">Custo</label> <br>
    <input type="text" name="custo" id="custo" value="{{ $produtos->custo }}"> <br>
    <label for="preco">Preço</label> <br>
    <input type="text" name="preco" id="preco" value="{{ $produtos->preco }}"> <br>
    <label for="quantidade">Quantidade</label> <br>
    <input type="text" name="quantidade" id="quantidade" value="{{ $produtos->quantidade }}"> <br>
    <button type="submit">Salvar</button>
    <a href="{{ route('pagina_inicial') }}">Voltar</a>
  </form>
  
</body>
</html>