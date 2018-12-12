@extends('Admin.layouts.main')

@section('content')

    <div class="container">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">Event List</h2>
                <div class="">
                    <a href="{{route('home')}}" class="btn btn-primary">Add Event</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                        <th>Penyelenggara</th>
                        <th>Event</th>
                        <th>Kategori</th>
                        <th>Tanggal</th>
                        <th>Waktu</th>
                        <th>Tempat</th>
                        <th>Harga</th>
                        <th>Kuota</th>
                        <th>Poster</th>
                        <th>Deskripsi</th>
                        <th>Action</th>
                        </thead>
                        
                        <tbody>
                        @foreach($data as $item)
                            <tr>
                                <td>{{$item->penyelenggara}}</td>
                                <td>{{$item->nama_event}}</td>
                                <td>{{$item->category_id}}</td>
                                <td>{{$item->tgl_event}}</td>
                                <td>{{$item->waktu_event}}</td>
                                <td>{{$item->tempat_event}}</td>
                                <td>{{$item->harga}}</td>
                                <td>{{$item->kuota}}</td>
                                <td>{{$item->foto}}</td>
                                <td>{{$item->deskripsi}}</td>
                                <td>
                                    <form action="{{ route('Admin.event.destroy', $item)}}" method="Post">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <a href="{{route('Admin.event.edit', ['id'=>$item->id])}}" class="btn badge-warning">Edit</a>
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
    </div>
    
    @endsection