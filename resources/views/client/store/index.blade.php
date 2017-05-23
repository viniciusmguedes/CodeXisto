@extends('template.store')

@section('publish')

@include('client.store._publish')

@endsection

@section('categories')

@include('client.store._categories')

@endsection

@section('content')

<!-- Carousel & New Products -->
<div class="col-md-9">
    
    <!-- Carousel -->
    <div class="row carousel-holder">
        <div class="col-md-12">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

                <!-- Items -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img class="slide-image" src="{{url('images/Banner A.png')}}" alt="">
                    </div>
                    <div class="item">
                        <img class="slide-image" src="{{url('images/Banner B.png')}}" alt="">
                    </div>
                    <div class="item">
                        <img class="slide-image" src="{{url('images/Banner A.png')}}" alt="">
                    </div>
                </div>

                <!-- Controllers Left & Right -->
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <i class="fa fa-chevron-left" aria-hidden="true"></i>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                </a>

            </div>
        </div>
    </div>

    <!-- New Products -->
    <div class="row">

        <!-- Title -->
        <div class="col-sm-12 col-lg-12 col-md-12">
            <h3 style="text-align: center;">
                <i class="fa fa-leaf" aria-hidden="true"></i>
                Novidades
            </h3> 
        </div>

        @foreach ($rProducts as $product)
        
            @include('client.store._product')
        
        @endforeach
        
    </div>

</div>

@endsection
