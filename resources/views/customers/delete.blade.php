@extends('layout.app')
@section('namePage','delete Customer')
@section('content')
    <table class="table" border="1">
        <tbody>
        <tr>
            <th>Name</th>
            <th>Dob</th>
            <th>Phone</th>
            <th>Email</th>
            <th>City</th>
        </tr>
        <tr>
            <td>{{$customer->name}}</td>
            <td>{{$customer->dob}}</td>
            <td>{{$customer->phone}}</td>
            <td>{{$customer->email}}</td>
            <td>{{$customer->city->name}}</td>
        </tbody>
    </table>
    <td>
        <a href="{{route('customers.destroy',$customer->id)}}">
            <button type="button" class="btn btn-danger">Delete</button>
        </a>
        <a href="{{route('customers.index')}}">
            <button type="button" class="btn btn-success">Back</button>
        </a>
@endsection
