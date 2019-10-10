@extends('layout.app')
@section('namePage','edit city')
@section('content')
    <form action="{{route('cities.update',$city->id)}}" method="post">
        @csrf
        <div class="form-group">
            <label for="exampleInputName">Name City</label>
            <input type="text" class="form-control" id="exampleInputName" placeholder="Enter Name" name="name"
                   value="{{$city->name}}">
        </div>
        <div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{route('cities.index')}}">
                <button type="button" class="btn btn-success">Back</button>
            </a>
        </div>
    </form>
@endsection
