@extends('layouts.app')

@section('main')
<main>
  @foreach ($comics as $comic)
  <div class="card">
    <h2> {{ $comic['title'] }}</h2>
    <img src="{{ $comic['thumb'] }}" alt="">
    <div class="detail-container">
      <p> {{ $comic['description']}}</p>
      <p> <span> {{ $comic['price'] }} $</span> <span> {{ $comic['sale_date']}}</span> </p>
      <p><span> {{ $comic['series'] }} $</span> <span> {{ $comic['type']}}</span> </p>
    </div>
  </div>
  @endforeach
</main>
@endsection
