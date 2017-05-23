@extends('app')

@section('content')
  <div class="container">

    <h3>Produtos</h3>

    <br>
    <a class="btn btn-default" href="{{ route('admin.products.create') }}">Novo produto</a>

    <br><br>

    <table class="table table-bordered">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>Categoria</th>
          <th>Vendedor</th>
          <th>Ação</th>
        </tr>
      </thead>

      <tbody>
        @foreach ($products as $product)
        <tr>
          <td>{{ $product->id }}</td>
          <td>{{ $product->name }}</td>
          <td>{{ $product->category->name }}</td>
          <td>{{ $product->seller->name }}</td>
          <td>
            <a href="{{route('admin.products.edit',['id'=>$product->id])}}">Editar</a> |
            <a href="{{route('admin.photos.index',['id'=>$product->id])}}">Fotos</a> |
            <a href="{{route('admin.products.destroy',['id'=>$product->id])}}">Deletar</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>

    <div class="pull-right">
        {!! $products->render() !!}
    </div>

  </div>
@endsection
