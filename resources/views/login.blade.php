@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-4 offset-sm-4">
                <form action="/login" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" name="email" class="form-control" id="">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" name="password" class="form-control" id="">
                    </div>
                    <button type="submit" class="btn btn-outline-primary">Login</button>
                </form>
            </div>
        </div>
    </div>
@endsection
