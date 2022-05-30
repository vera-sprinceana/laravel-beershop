@extends('layouts.layout')
@section('title', 'Beers')

@section('content')
    <div class="container">
        <div class="row row-cols-5 py-5 g-2 text-center">
            @forelse($beers as $key => $beer)
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title text-uppercase">{{$beer->nome}}</h5>
                      <h6 class="card-subtitle mb-2 text-muted">{{$beer->birrificio}}</h6>
                      <p class="card-text">{{$beer->gradazione}}</p>
                      <p class="card-text">{{$beer->prezzo}} €</p>
                      <p class="card-text">{{$beer->voto}}</p>

                    </div>
                  </div>
                  
            </div> 
            @Empty
            <h2>Non ci sono birre in vendita</h2>
            @endforelse
        </div>
    </div>
@endsection