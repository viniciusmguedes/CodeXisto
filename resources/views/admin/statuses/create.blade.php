@extends('app')

@section('content')
  <div class="container">

      <h3>Novo estado</h3>

      <br>
      @include('errors._check')

      {!! Form::open(['route'=>'admin.statuses.store', 'class'=>'form']) !!}

      @include('admin.statuses._form')

      <div class="form-group">
          {!! Form::submit('Criar estado',['class'=>'btn btn-primary']) !!}
      </div>

      {!! Form::close() !!}
  </div>
@endsection
