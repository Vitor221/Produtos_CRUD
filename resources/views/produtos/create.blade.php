<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Cadastrar Produto</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
  <form action="{{ route('registrar_produto') }}" method="POST">
    @csrf
    <label for="nome">Nome</label> <br>
    <input type="text" name="nome" id="nome"> <br>
    <label for="custo">Custo</label> <br>
    <input type="text" name="custo" id="custo"> <br>
    <label for="preco">Preço</label> <br>
    <input type="text" name="preco" id="preco"> <br>
    <label for="quantidade">Quantidade</label> <br>
    <input type="text" name="quantidade" id="quantidade"> <br>
    <button>Salvar</button> <br>
    <a href="{{ route('pagina_inicial') }}">Voltar</a>
  </form>
</body>
</html>