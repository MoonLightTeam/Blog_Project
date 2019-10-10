@extends('layout.app')
@section('namePage', 'create city')
@section('content')
    <form action="{{route('cities.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="exampleInputName">Name City</label>
            <input type="text" class="form-control" id="exampleInputName" placeholder="Enter Name" name="name">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Create</button>
            <a href="{{route('cities.index')}}">
                <button type="button" class="btn btn-success">Back</button>
            </a>
        </div>
    </form>
@endsection
