@extends('layouts.app')

@section('content')
    <h1 class=" text-center text-capitalize mt-4">inventario</h1>
    @foreach ($products as $value)
        <div class="container">
            <p class="mt-4 text-capitalize">{{ $value->name }}</p>

        </div>

    @endforeach
@endsection
