<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Deletar produto</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
  <form action="{{ route('excluir_produto', ['id' => $produtos->id]) }}" method="POST">
    @csrf
    <label for="">Tem certeza que deseja excluir o produto?</label> <br>
    <button>Sim</button>
    <a href="{{ route('pagina_inicial') }}">Voltar</a>
  </form>
</body>
</html>