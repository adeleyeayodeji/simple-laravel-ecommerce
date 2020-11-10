@extends('master')
@section('content')
<div class="container">
    <div class="row w-75 offset-1">
        <div class="col-sm-12 col-md-6 col-lg-6">
        <img src="{{$detail['gallery']}}" class="img-fluid" alt="">
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
            <a href="/">Go Back</a>
            <div class="card">
                <div class="card-body">
                <h4 class="card-title">{{$detail['name']}}</h4>
                <h5 class="card-title">Price{{$detail['price']}}</h5>
                <p class="card-text">{{$detail['description']}}</p>
                <p class="card-text">Category: {{$detail['category']}}</p>
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6 mb-2">
                        <button class="btn btn-primary">Add to Cart</button>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <button class="btn btn-success">Buy Now</button>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
