@extends('Admin.layouts.main')

@section('content')

    <div class="container">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">Update Tag</h2>
            </div>
            <div class="justify-content-center">
                <div class="col-lg-5">
                    @if(session()->has('alert'))
                        <div class="alert alert-success">
                            {{session('msg')}}
                        </div>
                    @endif
                    <form action="{{route('tag.update', $tag)}}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="tag">Tag</label>
                            <input type="text" name="nama" class="form-control" required value="{{ $tag->nama }}">
                        </div>
                        <div class="">
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @endsection