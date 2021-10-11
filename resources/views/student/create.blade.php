@extends('layout.main')

@section('title')
    Registration form
@endsection

@section('content')

<div class="container">
    <h2 class="text-center mt-3">Student Registration Form</h2>
    <form action="{{ route('student.store') }}"  method="POST">
        @csrf
        <div class="mb-3">
            <label for="Name" class="form-label">Name</label>
            <input type="text" class="form-control @error('name')  is-invalid  @enderror" id="name" name="name" value="{{ old('name') }}">
            @error('name')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div> 
        
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control @error('email')  is-invalid  @enderror" id="email" name="email" value="{{ old('email') }}">
            @error('email')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>   
        
        <div class="mb-3">
            <label for="city" class="form-label">City</label>
            <input type="text" class="form-control @error('city')  is-invalid  @enderror" id="city" name="city" value="{{ old('city') }}">
            @error('city')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div> 
        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div> 
@endsection