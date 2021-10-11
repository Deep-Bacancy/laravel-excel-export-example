@extends('layout.main')

@section('title')
    Student Data
@endsection

@section('content')
<div class="container mt-3">
    @if ($message = Session::get('success'))
    <div class="alert alert-success mx-1" role="alert">
        {{ $message }}
    </div>
     @endif
    <h2 class=" text-center">Student Data</h2>
    <div class="mt-5">
         <a href="{{ route('student.export') }}" class="btn btn-primary">Export Data</a>
        <a href="{{ route('student.create') }}" class="btn btn-primary">Add Data</a>
    </div>
    <table class="table table-hover mt-5">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>City</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                  <tr>
                      <td>{{ $student->id }}</td>
                      <td>{{ $student->name }}</td>
                      <td>{{ $student->email }}</td>
                      <td>{{ $student->city }}</td>
                  </tr>
            @endforeach
        </tbody>
        

    </table>

    <div class="mt-5">
        {{ $students->links() }}
    </div>

    

</div>
@endsection