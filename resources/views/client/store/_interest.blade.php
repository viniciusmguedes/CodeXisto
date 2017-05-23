@section('interest')
<!-- Modal -->
<div class="modal fade" id="interestModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            {!! Form::open(['route'=>['client.store.interest', $product->id], 'class'=>'form']) !!}

                <!-- Header -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 class="modal-title" id="myModalLabel">
                        Ficou interessado no produto?<br>
                        <small>
                            Preencha os campos abaixo, que entraremos em contato pelo e-mail informado:
                        </small>
                    </h3>
                </div>                

                <!-- Body -->
                <div class="modal-body">

                    <!-- Name -->
                    <div class="form-group">
                        {!! Form::label('Name', 'Nome Completo:') !!}
                        {!! Form::text('name', null, ['class'=>'form-control']) !!}
                    </div>

                    <!-- Email -->
                    <div class="form-group">
                        {!! Form::label('Email', 'E-mail:') !!}
                        {!! Form::text('email', null, ['class'=>'form-control']) !!}
                    </div>

                    <!-- Telephon -->
                    <div class="form-group">
                        {!! Form::label('Phone', 'Telefone:') !!}
                        {!! Form::text('phone', null, ['class'=>'form-control']) !!}
                    </div>

                    <!-- CellPhone -->
                    <div class="form-group">
                        {!! Form::label('Cellphone', 'Celular:') !!}
                        {!! Form::text('cell_phone', null, ['class'=>'form-control']) !!}
                    </div>

                    <!-- Messager -->
                    <div class="form-group">
                        {!! Form::label('Message', 'Mensagem:') !!}
                        {!! Form::textarea('message', null, ['class'=>'form-control']) !!}
                    </div>

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

