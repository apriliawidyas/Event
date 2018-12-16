@extends('Admin.layouts.main')

@section('content')
    
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">User List</h2>
            </div>
            <div class="table-responsive">
                <table class=" table table-striped table-hover">
                    <thead>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>No. Telp</th>
                    <th>Tanggal Lahir</th>
                    <th>foto</th>
                    <th>Action</th>
                    </thead>

                    <tbody>
                    @foreach($item as $item)
                        <tr>
                            <td>{{$item->name}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->alamat}}</td>
                            <td>{{$item->tgl_lahir}}</td>
                            <td>{{$item->notelp}}</td>
                            <td><img src="img src="{{ asset('storage/' . $item->foto) }} class="img-fluid" style="max-width: 60px" alt="{{ $item->nama }}"></td>
                            <td>
                                <form action="{{ route('user.destroy', $item)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <a href="{{route('user.edit', $item)}}" class="btn badge-warning">Edit</a>
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