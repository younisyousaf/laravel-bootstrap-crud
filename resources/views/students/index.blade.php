@extends('layouts.front');

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @session('status')
                    <div class="alert alert-success alert-dismissible">
                        {{ session('status') }}
                    </div>
                @endsession
                <div class="card">
                    <div class="card-header">
                        <h4>
                            Students Lits
                            <a href="{{ route('students.create') }}" class="btn btn-primary float-end">
                                Add Student
                            </a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($students as $student)
                                    <tr>
                                        <td>{{ $student->id }}</td>
                                        <td>{{ $student->firstname }}</td>
                                        <td>{{ $student->lastname }}</td>
                                        <td>{{ $student->email }}</td>
                                        <td style="display: flex; justify-content:start;align-items:flex-start; gap: 8px;">
                                            <a href="{{ route('students.edit', $student->id) }}"
                                                class="btn btn-primary">Edit</a>

                                            <a href="{{ route('students.show', $student->id) }}"
                                                class="btn btn-info">Show</a>
                                            <form action="{{ route('students.destroy', $student->id) }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="btn btn-danger ">
                                                    Delete
                                                </button>
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
    </div>
@endsection
