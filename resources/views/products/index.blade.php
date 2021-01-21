@extends('layouts.app')

@section('content')
    <h1 class=" text-center text-capitalize mt-4">inventario</h1>

    <table class="table">
        <thead>
            <tr class="text-capitalize">
                <th scope="col">id</th>
                <th scope="col">name</th>
                <th scope="col">color</th>
                <th scope="col">size</th>
                <th scope="col">price</th>
                <th scope="col">description</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>
                        {{ $product->id }}
                    </td>
                    <td>
                        {{ $product->name }}
                    </td>
                    <td>
                        {{ $product->color }}
                    </td>
                    <td>
                        {{ $product->size }}
                    </td>
                    <td>
                        {{ $product->price }}
                    </td>
                    <td>
                        {{ $product->description }}
                    </td>
                    <td>
                        <a href="{{ route('products.show', ['product' => $product->id ]) }}"
                            class="text-capitalize btn btn-info">
                            details
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="container">

        <a href="{{ route('products.create') }}" class="mt-4 text-uppercase btn btn-info">inserisci nuovo prodotto</a>

    </div>
@endsection
