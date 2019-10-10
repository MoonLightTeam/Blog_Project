@extends('layout.app')
@section('namePage','list customer city')
@section('content')
    <table class="table" border="1">
        <p class="alert-primary">Danh sách khách hàng ở thành phố {{$city->name}}</p>
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Dob</th>
            <th scope="col">Phone</th>
            <th scope="col">Email</th>
        </tr>
        </thead>
        @foreach($customers as $key => $customer)
            <tbody>
            <tr>
                <th scope="row">{{++$key}}</th>
                <td>{{$customer->name}}</td>
                <td>{{$customer->dob}}</td>
                <td>{{$customer->phone}}</td>
                <td>{{$customer->email}}</td>
            </tbody>
        @endforeach

    </table>
@endsection
