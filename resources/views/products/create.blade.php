@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class=" text-center text-capitalize mt-4">inserimento prodotto</h1>


        <form class="mt4" action="index.html" method="post">

              <div class="form-group">
                <label for="exampleInputEmail1">nome</label>
                <input type="" class="form-control"  placeholder="inserisci nome">
              </div>

              <div class="form-group">
                <label for="exampleInputPassword1">colore</label>
                <input type="" class="form-control" placeholder="inserisci colore">
              </div>

              <div class="form-group">
                <label for="exampleInputPassword1">taglia</label>
                <input type="" class="form-control"  placeholder="inserisci taglia">
              </div>

              <div class="form-group">
                <label for="exampleInputPassword1">prezzo</label>
                <input type="" class="form-control"  placeholder="inserisci prezzo">
              </div>

              <div class="form-group">
                <label for="exampleInputPassword1">descrizione</label>
                <input type="" class="form-control"  placeholder="inserisci descrizione">
              </div>


              <button type="submit" class="btn btn-info">inserisci prodotto</button>

          </form>



    </div>


@endsection
