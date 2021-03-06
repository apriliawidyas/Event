@extends('Admin.layouts.main')

@section('content')

    <div class="container">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">Edit Data Event</h2>
            </div>
            <div class="justify-content-center">
                <div class="col-lg-10">
                    @if(session()->has('alert'))
                        <div class="alert alert-success">
                            {{session('msg')}}
                        </div>
                    @endif
                    <form action="{{route('event.update', $event)}}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="nama">Penyelenggara</label>
                            <input type="text" name="penyelenggara" class="form-control" required value="{{ $event->penyelenggara }}">
                        </div>
                        <div class="form-group">
                            <label for="event">Nama Event</label>
                            <input type="text" name="nama_event" class="form-control" required value="{{ $event->nama_event }}">
                        </div>
                        <div class="form-group">
                            <label for="kategori">Kategori</label>
                            <select name="category_id" id="kategori" class="form-control">
                                @foreach($kategori as $item)
                                    <option value="{{$item->id}}">{{$item->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tanggal">Tanggal Event</label>
                            <input type="date" name="tgl_event" class="form-control" required value="{{ $event->tgl_event }}">
                        </div>
                        <div class="form-group">
                            <label for="waktu">Waktu Event</label>
                            <input type="time" name="waktu_event" class="form-control" required value="{{ $event->waktu_event }}">
                        </div>
                        <div class="form-group">
                            <label for="tempat">Tempat Event</label>
                            <input type="text" name="tempat_event" class="form-control" required value="{{ $event->tempat_event }}">
                        </div>
                        <div class="form-group">
                            <label for="kuota">Kuota</label>
                            <input type="number" name="kuota" class="form-control" required value="{{ $event->kuota }}">
                        </div>
                        <div class="form-group">
                            <label for="harga">HTM</label>
                            <input type="text" name="harga" class="form-control" required value="{{ $event->harga }}">
                        </div>
                        <div class="form-group">
                            <label for="poster">Poster</label>
                            <input type="file" name="foto" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="desc">Deskripsi</label>
                            <textarea name="deskripsi" class="form-control" required>{{ $event->deskripsi }}</textarea>
                        </div>
                        <div class="">
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                </div>
            </div>
        </div>
    </div>

    @endsection