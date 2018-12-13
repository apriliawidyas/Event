@extends('Admin.layouts.main')

@section('content')

    <div class="container">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">List Category</h2>
            </div>
            <div class="">
                <a href="{{route('category.create')}}" class="btn btn-primary">Add Category</a>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                    <th>Category</th>
                    <th>Action</th>
                    </thead>

                    <tbody>
                    @foreach($data as $item)
                        <tr>
                            <td>{{$item->nama}}</td>
                            <td>
                                <form action="{{ route('category.destroy', $item)}}" method="Post">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <a href="{{route('category.edit', ['id'=>$item->id])}}" class="btn badge-warning">Edit</a>
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection