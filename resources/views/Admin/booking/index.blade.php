@extends('Admin.layouts.main')
@section('content')

    <div class="container">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">Booking List</h2>
            </div>
            <div class="">
                <a href="{{route('booking.create')}}">Add Booking</a>
            </div>
            <div class="table-responsive">
                <table class="table-striped table-hover">
                    <thead>
                    <th>Peserta</th>
                    <th>Nama Event</th>
                    <th>Action</th>
                    </thead>

                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @endsection