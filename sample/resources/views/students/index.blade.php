@extends('layout')

@section('content')
{{--    error message--}}
    @if(session()->get('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div><br />
    @endif

    <div class="search">
        <div class="row p-2">
                <div class="col-sm-8 form-inline">
                    <label for="course" class="control-label p-2">Course</label>
                    <select class="form-control" id="course">
                        <option>Information Technology</option>
                        <option>Business</option>
                    </select>
                    <div class="input-group custom-search-form">
                        <label for="name" class="control-label p-2">Name</label>
                        <input type="text" class="form-control" placeholder="Search..." style="width: 300px;">
                    </div>
                </div>
                <div class="col-sm-4 text-right">
                    <a href="{{ route('students.index','')}}" class="btn btn-primary"><i class="fa fa-btn fa-search"></i>Search</a>
                    <a href="{{ route('students.create','')}}" class="btn btn-primary"><i class="fa fa-btn fa-plus"></i>Add</a>
                </div>
        </div>
    </div>

    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
            <td>Address</td>
            <td>Course</td>
            <td>Enroll Date</td>
            <td colspan="2">Action</td>
        </tr>
        </thead>
        <tbody>
        @foreach($students as $student)
            <tr>
                <td>{{$student->id}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->email}}</td>
                <td>{{$student->address}}</td>
                <td>{{$student->course}}</td>
                <td>{{$student->enroll}}</td>
                <td>
                    <a href="{{ route('students.edit',$student->id)}}" class="btn btn-primary"><i class="fa fa-btn fa-edit"></i>Edit</a>
                </td>
                <td>
                    <form action="{{ route('students.destroy', $student->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-primary" type="submit"><i class="fa fa-btn fa-trash"></i>Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div class="row">
        <div class="center-block">{{ $students->links()}}</div>
    </div>
@endsection