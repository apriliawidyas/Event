@extends('main2')

@section('kontenn')
    <br><br><br>
    <div class="container">
        <hr>
        <form class="form-horizontal" role="form" action="{{route('user.update', $user->id)}}" method="post"
              enctype="multipart/form-data">
            <div class="row">
                <!-- left column -->
                <div class="col-md-3">
                    <div class="text-center">
                        @php
                            $foto = $user->foto ? asset('storage/' . $user->foto) : '//placehold.it/100';
                        @endphp
                        <img src="{{ $foto }}" class="avatar img-circle" alt="avatar" style="width: 60px; height: 60px;">
                        <h6>Upload a different photo...</h6>

                        <input type="file" class="form-control" name="foto">
                    </div>
                </div>

                <!-- edit form column -->
                <div class="col-md-9 personal-info">
                    <h3>Personal info</h3>


                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Name:</label>
                        <div class="col-lg-8">
                            <input class="form-control" type="text" name="name" value="{{$user->name}}" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Email:</label>
                        <div class="col-lg-8">
                            <input class="form-control" type="email" name="email" value="{{$user->email}}" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Tanggal Lahir:</label>
                        <div class="col-lg-8">
                            <input class="form-control" type="date" name="tgl_lahir" value="{{$user->tgl_lahir}}"
                                   required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Alamat:</label>
                        <div class="col-lg-8">
                            <input class="form-control" type="text" name="alamat" value="{{$user->alamat}}" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-3 control-label">Nomor Telepon:</label>
                        <div class="col-lg-8">
                            <input class="form-control" type="text" name="nomor_telepon" value="{{$user->notelp}}"
                                   required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Password:</label>
                        <div class="col-md-8">
                            <input class="form-control" type="password" name="password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Confirm password:</label>
                        <div class="col-md-8">
                            <input class="form-control" type="password" name="confirmation">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label"></label>
                        <div class="col-md-8">
                            <input type="submit" class="btn btn-primary" value="Save Changes">
                            <span></span>
                            <input type="reset" class="btn btn-default" value="Cancel">
                        </div>
                    </div>

                </div>
            </div>
        </form>
    </div>
    <hr>

@endsection