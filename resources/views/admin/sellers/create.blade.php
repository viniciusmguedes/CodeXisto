@extends('app')

@section('content')
  <div class="container">

      <h3>Novo vendedor</h3>

      <br>
      @include('errors._check')

      {!! Form::open(['route'=>'admin.sellers.store', 'class'=>'form']) !!}

      @include('admin.sellers._form')

      <div class="form-group">
          {!! Form::submit('Criar vendedor',['class'=>'btn btn-primary']) !!}
      </div>

      {!! Form::close() !!}
  </div>
@endsection
