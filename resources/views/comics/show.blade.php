@extends('layouts.app')

@section('main')
<main>
  <div class="container">
      <h2> {{ $comic['title'] }} </h2>
      <img src="{{ $comic['thumb'] }}" alt="">
      <p> <span>Description:</span> {{ $comic['description']}}</p>
      <div class="detail-container">
        <p> <span>Price: </span> {{ $comic['price'] }} $ <span>Sale Date: </span> {{ $comic['sale_date']}} </p>
        <p><span>Series: </span> {{ $comic['series'] }} $ <span>Type: </span> {{ $comic['type']}} </p>
      </div>
  </div>
  <a href="{{ route('comics.index')}}">Return Homepage</a>  
</main>
@endsection
