@extends('layout.app')
@section('namePage','show city')
@section('content')
    <table class="table" border="1">
        <tbody>
        <tr>
            <th>Name City</th>
        </tr>
        <tr>
            <td>{{$city->name}}</td>
        </tr>
        </tbody>
    </table>
    <a href="{{route('cities.index')}}">
        <button type="button" class="btn btn-success">Back</button>
    </a>
@endsection
