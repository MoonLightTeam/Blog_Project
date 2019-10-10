@extends('layout.app')
@section('namePage','list city')
@section('content')
    <table class="table" border="1">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Customer number</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        @foreach($cities as $key => $city)
            <tbody>
            <tr>
                <th scope="row">{{++$key}}</th>
                <td>{{$city->name}}</td>
                <td>{{$city->customers->count()}}

                    <a href="{{route('cities.customers',$city->id)}}">
                        <button type="button" class="btn btn-warning">Show</button>
                    </a>
                </td>
                <td>
                    <a href="{{route('cities.edit',$city->id)}}">
                        <button type="button" class="btn btn-success">Update</button>
                    </a>
                    <a href="{{route('cities.show',$city->id)}}">
                        <button type="button" class="btn btn-warning">Show</button>
                    </a>
                    <a href="{{route('cities.delete',$city->id)}}">
                        <button type="button" class="btn btn-danger">Delete</button>
                    </a>
                </td>
            </tr>
            </tbody>
        @endforeach
    </table>
    <a href="{{route('cities.create')}}">
        <button type="button" class="btn btn-info">Create</button>
    </a>
    <div class="mt-3">
        {{$cities->links()}}
    </div>
@endsection
