@extends('master')
@section('content')
    <div class="container">
        <div id="carouselId" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                <li data-target="#carouselId" data-slide-to="1"></li>
                <li data-target="#carouselId" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                @foreach ($data as $item)
                <a href="detail/{{$item['id']}}">
                <div class="carousel-item {{$item['id'] == 1 ? 'active' : ""}}">
                    <img style="width:100%;height:300px;object-fit:contain;object-position:center top;" src="{{$item['gallery']}}" alt="{{$item['name']}}">
                    <div class="carousel-caption">
                        <h3>{{$item['name']}}</h3>
                    </div>
                </div>
                </a>
                @endforeach

            </div>
            <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="trending-products">
            {{-- Trending products --}}
            <div class="row">
                @foreach ($data as $item)
            <div class="col-sm-6 col-md-4 col-lg-3 mb-3">
            <a href="detail/{{$item['id']}}">
                <div class="card">
                    <img class="card-img-top" src="{{$item['gallery']}}" alt="">
                    <div class="card-body">
                        <h4 class="card-title">{{$item['name']}}</h4>
                        <p class="card-text">{{substr($item['description'],0,100)}}</p>
                    </div>
                </div>
            </a>
            </div>
                @endforeach
            </div>
            {{-- /Trending products --}}
        </div>
    </div>
@endsection
