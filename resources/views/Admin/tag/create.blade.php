@extends('Admin.layouts.main')

@section('content')

    <div class="container">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">Add Tag</h2>
            </div>
            <div class="justify-content-center">
                <div class="col-4 p-3">
                    @if(session()->has('alert'))
                        <div class="alert alert-success">
                            {{session('msg')}}
                        </div>
                    @endif
                        <form action="{{route('tag.store')}}" method="POST">
                        @csrf
                            <div class="form-group">
                                <label for="tag">Tag</label>
                                <input type="text" name="nama" class="form-control" required>
                            </div>
                            <div class="">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>

    @endsection