@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center text-capitalize">view singola del prodotto : {{ $product->id }}</h1>
        <ul class="text-capitalize mt-4">
            <li> {{ $product->name }} </li>
            <li> {{ $product->color }} </li>
            <li> {{ $product->price }} </li>
            <li> {{ $product->size }} </li>
            <li> {{ $product->description }} </li>
        </ul>

    </div>
@endsection
