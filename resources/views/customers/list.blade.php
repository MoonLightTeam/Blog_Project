@extends('layout.app')
@section('namePage','list Customer')
@section('content')
    <div class="col-6">

        <form class="navbar-form navbar-left" action="{{route('customers.search')}}" method="get">

            @csrf

            <div class="row">

                <div class="col-8">

                    <div class="form-group">

                        <input type="text" class="form-control" placeholder="Search"
                               value="{{(isset($_GET['search'])) ? $_GET['search']: ''}}" name="search">

                    </div>

                </div>

                <div class="col-4">

                    <button type="submit" class="btn btn-primary">Search</button>

                </div>

            </div>

        </form>

    </div>
    <table class="table" border="1">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Dob</th>
            <th scope="col">Phone</th>
            <th scope="col">Email</th>
            <th scope="col">City</th>
            <th scope="col">Action</th>
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
                <td>{{$customer->city['name']}}</td>
                <td>
                    <a href="{{route('customers.edit',$customer->id)}}">
                        <button type="button" class="btn btn-success">Update</button>
                    </a>
                    <a href="{{route('customers.show',$customer->id)}}">
                        <button type="button" class="btn btn-warning">Show</button>
                    </a>
                    <a href="{{{route('customers.delete',$customer->id)}}}">
                        <button type="button" class="btn btn-danger">Delete</button>
                    </a>
                </td>
            </tbody>
        @endforeach
    </table>
    <a href="{{route('customers.create')}}">
        <button type="button" class="btn btn-info">Create</button>
    </a>
    <div class="mt-3">
        {{$customers->appends(request()->query())}}
    </div>
@endsection
