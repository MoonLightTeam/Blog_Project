@extends('layout.app')
@section('namePage','create Customer')
@section('content')
    <form action="{{route('customers.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="exampleInputName">Name</label>
            <input type="text" class="form-control" id="exampleInputName" placeholder="Enter Name" name="name">
        </div>
        <div class="error-message">
           @if($errors->has('name'))
               <p class="alert-danger">{{$errors->first('name')}}</p>
               @endif
        </div>
        <div class="form-group">
            <label for="exampleInputDob">Dob</label>
            <input type="date" class="form-control" id="exampleInputDob" placeholder="Enter Dob" name="dob">
        </div>

        <div class="form-group">
            <label for="exampleInputPhone">Phone</label>
            <input type="text" class="form-control" id="exampleInputPhone" placeholder="Enter Phone" name="phone">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                   placeholder="Enter email" name="email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <select name="city_id" class="form-control">
                @foreach($cities as $key => $city)
                    <option value="{{$city->id}}">{{$city->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Create</button>
            <a href="{{route('customers.index')}}">
                <button type="button" class="btn btn-success">Back</button>
            </a>
        </div>
    </form>
@endsection
