@extends('base')

@section('content')
<h2>Produtos Cadastrados</h2>
    @if (!isset($produtos))
        <h3 style="color: #ef233c; font-weight: 700; text-align: center; margin-top: 20px;">Nenhum veículo cadastrado!</h3>
    @else
    <table class="data-table">
      <thead>
        <tr>
          <th>Nome</th>
          <th>Custo</th>
          <th>Preço</th>
          <th>Quantidade</th>
          <th colspan="5">Opções</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($produtos as $p)
            <tr>
              <td>{{ $p->nome }}</td>
              <td>{{ $p->custo }}</td>
              <td>{{ $p->preco }}</td>
              <td>{{ $p->quantidade }}</td>
              <td><a href="{{ route('alterar_produto', ['id' => $p->id]) }}">Editar</a></td>
              <td><a href="{{ route('mostrar_produto', ['id' => $p->id]) }}">Exibir</a></td>
              <td><a href="{{ route('excluir_produto', ['id' => $p->id]) }}">Excluir</a></td>
            </tr>
        @endforeach
      </tbody>
      <tfoot>
        <tr>
          <td colspan="7">Produtos cadastrados: {{ $produtos->count() }}</td>
        </tr>
      </tfoot>
    </table>
        
    @endif
@endsection