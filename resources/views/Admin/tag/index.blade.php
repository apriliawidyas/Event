@extends('Admin.layouts.main')

@section('content')
    
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">Tag List</h2>
            </div>
            <div class="">
                <a href="{{route('tag.create')}}" class="btn btn-primary">Add Tag</a>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                    <th>Tag</th>
                    <th>Action</th>
                    </thead>

                    <tbody>
                    @foreach($data as $item)
                        <tr>
                            <td>{{$item->nama}}</td>
                            <td>
                                <form action="{{ route('tag.destroy', $item)}}" method="Post">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <a href="{{route('tag.edit', ['id'=>$item->id])}}" class="btn badge-warning">Edit</a>
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