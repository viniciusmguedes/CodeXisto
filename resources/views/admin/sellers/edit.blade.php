@extends('app')

@section('content')
  <div class="container">

      <h3>Editando vendedor: {{ $seller->name }}</h3>

      <br>
      @include('errors._check')

      {!! Form::model($seller, ['route'=>['admin.sellers.update', $seller->id]]) !!}

      @include('admin.sellers._form')

      <div class="form-group">
          {!! Form::submit('Salvar vendedor',['class'=>'btn btn-primary']) !!}
      </div>

      {!! Form::close() !!}
  </div>
@endsection
