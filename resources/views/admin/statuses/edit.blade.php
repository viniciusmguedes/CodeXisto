@extends('app')

@section('content')
  <div class="container">

      <h3>Editando estado: {{ $status->name }}</h3>

      <br>
      @include('errors._check')

      {!! Form::model($status, ['route'=>['admin.statuses.update', $status->id]]) !!}

      @include('admin.statuses._form')

      <div class="form-group">
          {!! Form::submit('Salvar estado',['class'=>'btn btn-primary']) !!}
      </div>

      {!! Form::close() !!}
  </div>
@endsection
