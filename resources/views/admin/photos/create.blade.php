@extends('app')

@section('content')
  <div class="container">

      <h3>Upload foto</h3>

      <br>
      @include('errors._check')

      {!! Form::open(['route'=>['admin.photos.store', $product->id], 'class'=>'form','enctype'=>"multipart/form-data"]) !!}

      <div class="form-group">
          {!! Form::label('Photo', 'Foto:') !!}
          {!! Form::file('photo', null, ['class'=>'form-control']) !!}
      </div>

      <div class="form-group">
          {!! Form::submit('Upload foto',['class'=>'btn btn-primary']) !!}
      </div>

      {!! Form::close() !!}
  </div>
@endsection
