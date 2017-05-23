@section('categories')

<!-- Search & Categories -->
<div class="col-md-3">
    
    <!-- Search -->
    {!! Form::open(['route'=>['client.store.search'], 'class'=>'form']) !!}
    <div class="input-group">
        {!! Form::text('keyword', null, ['class'=>'form-control','placeholder'=>'Estou procurando por...']) !!}
        <!--<input type="text" class="form-control" placeholder="Estou procurando por...">-->
        <span class="input-group-btn">
            <button class="btn btn-default" type="submit">
                <i class="fa fa-search" aria-hidden="true"></i>
            </button>
        </span>
    </div> 
    {!! Form::close() !!}
    
    <!-- Categories -->
    <div class="list-group" style="padding-top: 20px">  
        
        <a class="list-group-item" data-toggle="collapse" data-target="#demo">
            <h4>
                <i class="fa fa-leaf" aria-hidden="true"></i>
                Categorias <span class="badge">{{count($categories)}}</span>
            </h4> 
        </a>
        
        <div id="demo" class="collapse in">
        @foreach ($categories as $category)
        <a href="{{route('client.store.products',['id'=>$category->id])}}" class="list-group-item">
            <i class="fa fa-circle-o-notch" aria-hidden="true"></i>
            {{ ucfirst($category->name) }}
        </a>
        @endforeach
        </div>

    </div>
    
</div>

@endsection