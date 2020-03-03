@extends('layouts.app')

@section('title', 'Service Page')

@section('content')
    <h1>This's service page</h1>

    <form action="/service" method="post">
        <input type="text" name="name" autocomplete="off">

        @csrf

        <button>Add Service</button>
    </form>
    <h5 style="color:red">@error('name'){{$message}} @enderror</h5>

    <ul>
        @forelse($services as $service)

            <li>{{$service -> name}}</li>
        @empty
            <li>No services available at the moment !!</li>
        @endforelse
    </ul>
@endsection

