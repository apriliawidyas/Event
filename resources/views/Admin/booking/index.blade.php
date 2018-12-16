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
                    </thead>
                    <tbody>
                    @foreach($booking as $booking)
                        <td>{{$booking->id_user}}</td>
                        <td>{{$booking->id_event}}</td>
                    <td></td>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

    @endsection