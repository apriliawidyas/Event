@extends('main')
@section('konten')

    <div class ="container" style="margin-top: 200px;">
    @if(\Session::has('alert'))
                <div class="alert alert-danger">
                    <div>{{Session::get('alert')}}</div>
                </div>
            @endif
            @if(\Session::has('alert-success'))
                <div class="alert alert-success">
                    <div>{{Session::get('alert-success')}}</div>
                </div>
            @endif
            <form method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="alamat">Password:</label>
                    <input type="password" class="form-control" id="password" name="password"></input>
                </div>
                <div class="form-group">
                    <input class="btn btn-md btn-primary" type="submit" value="Login" style="color:black">
                    <a href="{{url('register')}}" class="btn btn-md btn-warning">Register</a>
                </div>
            </form>
    </div>
            
@endsection