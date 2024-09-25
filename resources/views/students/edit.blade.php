@extends('layouts.front')

@section('content')
    <div class="container d-flex justify-content-center">
        <div class="row w-100">
            <div class="col-md-16">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Student
                            <a href="{{ url('students') }}" class="btn btn-danger float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('students.update', $student->id) }}" method="POST">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label for="firstname">Firstname</label>
                                <input type="text" name="firstname" id="firstname" class="form-control"
                                    value="{{ $student->firstname }}">
                                @error('firstname')
                                    <span class="text-danger"> {{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="lastname">Lastname</label>
                                <input type="text" name="lastname" id="lastname" class="form-control"
                                    value="{{ $student->lastname }}">
                                @error('lastname')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control"
                                    value="{{ $student->email }}">
                                @error('email')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary mt-2">Submit</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
