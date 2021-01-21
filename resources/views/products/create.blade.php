@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class=" text-center text-capitalize mt-4">inserimento prodotto</h1>


        <form class="mt4 text-capitalize" action="{{ route('products.store') }}" method="post">

            @csrf
                     
            <div class="form-group">
                <label>nome</label>
                <input type="" class="form-control"  name='name' placeholder="inserisci nome">
            </div>

            <div class="form-group">
                <label>colore</label>
                <input type="" class="form-control" name='color' placeholder="inserisci colore">
            </div>

            <div class="form-group">
                <label>taglia</label>
                <input type="" class="form-control"  name='size' placeholder="inserisci taglia">
            </div>

            <div class="form-group">
                <label>prezzo</label>
                <input type="" class="form-control"  name='price' placeholder="inserisci prezzo">
            </div>

            <div class="form-group">
                <label>descrizione</label>
                <input type="" class="form-control"  name='description' placeholder="inserisci descrizione">
            </div>


            <button type="submit" class="text-capitalize btn btn-info">inserisci prodotto</button>

        </form>



    </div>


@endsection
