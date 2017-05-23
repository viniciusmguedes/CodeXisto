@extends('template.store')

@section('publish')
<!-- Modal -->
<div class="modal fade" id="publishModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
                        
            {!! Form::open(['route'=>['client.store.publish_email'], 'class'=>'form']) !!}

                <!-- Header -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 class="modal-title" id="myModalLabel">
                        Quer publicar seu produto também?<br>
                        <small>
                            Preencha os campos abaixo, que entraremos em contato pelo e-mail informado:
                        </small>
                    </h3>
                </div>

                <!-- Body -->
                <div class="modal-body">
                    <h3>
                        <small>
                            Campos sobre o produto que deseja publicar:
                        </small>
                    </h3>
                    <br>
                    
                    <!-- Category -->
                    <div class="form-group">
                        {!! Form::label('Category', 'Categoria:') !!}
                        {!! Form::text('category', null, ['class'=>'form-control']) !!}
                    </div>
                    
                    <!-- Status -->
                    <div class="form-group">
                        {!! Form::label('Status', 'Estado:') !!}
                        {!! Form::select('status_id', $status, null, ['class'=>'form-control']) !!}
                    </div>

                    <!-- Name Product -->
                    <div class="form-group">
                        {!! Form::label('Product', 'Produto:') !!}
                        {!! Form::text('product', null, ['class'=>'form-control']) !!}
                    </div>

                    <!-- Description -->
                    <div class="form-group">
                        {!! Form::label('Description', 'Descrição:') !!}
                        {!! Form::textarea('description', null, ['class'=>'form-control']) !!}
                    </div>
                    
                    <!-- Price -->
                    <div class="form-group">
                        {!! Form::label('Price', 'Preço:') !!}
                        {!! Form::text('price', null, ['class'=>'form-control']) !!}
                    </div>
                    
                    <hr>
                    
                    <h3>
                        <small>
                            Campos para entrarmos em contato com você:
                        </small>
                    </h3>
                    <br>

                    @include('admin.sellers._form')

                </div>

                <!-- Footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    {!! Form::submit('Enviar Mensagem',['class'=>'btn btn-default']) !!}
                </div>

            {!! Form::close() !!}
        </div>
    </div>
</div>      
@endsection

