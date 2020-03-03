@extends('layouts.app')

@section('title', 'Service Page')

@section('content')
    <h1>This's service page</h1>

    <ul>
        @forelse($services as $service)

            <li>{{$service -> name}}</li>
        @empty
            <li>No services available at the moment !!</li>
        @endforelse
    </ul>
@endsection

