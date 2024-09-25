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
                    <div class="card-body">
                        <p><strong>Firstname: </strong>{{ $student->firstname }}</p>
                        <p><strong>Lastname: </strong>{{ $student->lastname }}</p>
                        <p><strong>Email: </strong>{{ $student->email }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
