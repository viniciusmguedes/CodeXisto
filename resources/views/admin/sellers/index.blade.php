@extends('app')

@section('content')
  <div class="container">

      <h3>Vendedores</h3>

      <br>
      <a class="btn btn-default" href="{{ route('admin.sellers.create') }}">Novo vendedor</a>
      <br><br><br>

      <table class="table table-bordered">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Ação</th>
          </tr>
        </thead>

        <tbody>
          @foreach ($sellers as $seller)
          <tr>
            <td>{{ $seller->id }}</td>
            <td>{{ $seller->name }}</td>
            <td>{{ $seller->email }}</td>
            <td><a href="{{route('admin.sellers.edit',['id'=>$seller->id])}}">Editar</a></td>
          </tr>
          @endforeach
        </tbody>
      </table>

      <div class="pull-right">
          {!! $sellers->render() !!}
      </div>

  </div>
@endsection
