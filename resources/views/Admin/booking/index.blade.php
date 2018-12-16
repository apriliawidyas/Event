@extends('Admin.layouts.main')
@section('content')

    <div class="container">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">Booking List</h2>
            </div>
            <div class="">
                <a href="">Add Booking</a>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                    <th>User</th>
                    <th>Nama Event</th>
                    <th>Action</th>
                    </thead>
                    <tbody>
                    @foreach($booking as $booking)
                        <td>{{$booking->user->name}}</td>
                        <td>{{$booking->event->nama_event}}</td>
                        <td>
                            <form action="{{ route('booking.destroy', $booking)}}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

    @endsection