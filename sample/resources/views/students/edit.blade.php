@extends('layout')

@section('content')
    <div class="card">
        <div class="card-header">
            Edit Student
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
            @endif
            <form method="post" action="{{ route('students.update', $student->id) }}">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" name="name" value={{ $student->name }} />
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" class="form-control" name="email" value={{ $student->email }} />
                </div>
                <div class="form-group">
                    <label for="address">Address:</label>
                    <input type="text" class="form-control" name="address" value={{ $student->address }} />
                </div>
                <div class="form-group">
                    <label for="course">Course:</label>
                    <input type="text" class="form-control" name="course" value={{ $student->course }} />
                </div>
                <div class="form-group">
                    <div class="col-md-3 p-0">
                        <label for="enroll">Enroll Date:</label>
                        <input type="date" class="form-control" name="enroll" max="3000-12-31" min="1000-01-01" value={{ $student->enroll }}>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary"><i class="fa fa-btn fa-edit"></i>Update</button>
                <div class="mb-2 float-right">
                    <a href="{{ route('students.index','')}}" class="btn btn-primary"><i class="fa fa-btn fa-arrow-left"></i>Back</a>
                </div>
            </form>
        </div>
    </div>
@endsection