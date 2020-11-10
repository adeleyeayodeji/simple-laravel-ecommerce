@extends('master')
@section('content')
    <div class="container">
    <h2>Search Term: {{$term}}</h2>
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
