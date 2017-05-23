@extends('app')

@section('content')
  <div class="container">

      <h3>Categorias</h3>

      <br>
      <a class="btn btn-default" href="{{ route('admin.categories.create') }}">Nova categoria</a>
      <br><br><br>

      <table class="table table-bordered">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Ação</th>
          </tr>
        </thead>

        <tbody>
          @foreach ($categories as $category)
          <tr>
            <td>{{ $category->id }}</td>
            <td>{{ $category->name }}</td>
            <td>
              <a href="{{route('admin.categories.edit',['id'=>$category->id])}}">Editar</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>

      <div class="pull-right">
          {!! $categories->render() !!}
      </div>

  </div>
@endsection
