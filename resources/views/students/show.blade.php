@extends('layouts.front')

@section('content')
    <div class="container d-flex justify-content-center">
        <div class="row w-100">
            <div class="col-md-16">
                <div class="card">
                    <div class="card-header">
                        <h4>Show Student Detail
                            <a href="{{ url('students') }}" class="btn btn-danger float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div class="">
                            <p><strong>Firstname: </strong>{{ $student->firstname }}</p>
                            <p><strong>Lastname: </strong>{{ $student->lastname }}</p>
                            <p><strong>Email: </strong>{{ $student->email }}</p>
                        </div>
                        <img src="{{ asset('images/' . $student->image) }}" alt="User Image" width="120" height="120">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
