<!-- Product -->
<div class="col-sm-12 col-lg-12 col-md-12">
    <hr>

    <!-- Image -->
    <div class="col-sm-4 col-lg-4 col-md-4">
        @if(count($product->photos))
            <img src="{{url('uploads/'.$product->photos->first()->id.".".$product->photos->first()->extension)}}" alt="..." class="product-home-img">
        @else
            <img src="{{url('images/no-image.png')}}" alt="..." class="product-home-img">
        @endif
    </div>

    <!-- Information & Button -->
    <div class="col-sm-8 col-lg-8 col-md-8">

        <!-- Information -->
        <div class="row" style="min-height: 200px">
            <h4 class="pull-right" style="font-weight: 700">R$ {{ str_replace('.', ',',$product->price) }}</h4>
            <h4>
                <a href="{{route('client.store.product',['id'=>$product->id])}}" class="product-home-title">
                    {{ ucfirst($product->name) }}
                </a>
                <br>|
                <small>
                    <a href="{{route('client.store.products',['id'=>$product->category->id])}}" class="product-home-category">
                        {{ ucfirst($product->category->name) }}
                    </a>
                </small>
            </h4>
            <p>
                {{ ucfirst($product->description) }}
            </p>
        </div>
        
        <!-- Button More Information -->
        <div class="row">
            <div class="pull-right">
                <a class="btn btn-default" href="{{route('client.store.product',['id'=>$product->id])}}">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                    Mais Informações
                </a>
            </div>
        </div>
    </div>

</div>