@extends('app')

@section('content')
  <div class="container">

      <h3>Estados</h3>

      <br>
      <a class="btn btn-default" href="{{ route('admin.statuses.create') }}">Novo estado</a>
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
          @foreach ($statuses as $status)
          <tr>
            <td>{{ $status->id }}</td>
            <td>{{ $status->name }}</td>
            <td>
              <a href="{{route('admin.statuses.edit',['id'=>$status->id])}}">Editar</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>

      <div class="pull-right">
          {!! $statuses->render() !!}
      </div>

  </div>
@endsection
