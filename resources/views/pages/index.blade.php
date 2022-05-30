@extends('layouts.layout')
@section('title', 'Beers')

@section('content')
    <div class="container">
        <div class="row row-cols-5 py-5 g-2">
            @forelse($beers as $key => $beer)
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">{{$beer->nome}}</h5>
                      <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="card-link">Card link</a>
                      <a href="#" class="card-link">Another link</a>
                    </div>
                  </div>
            </div> 

        </div>
    </div>
@endsection