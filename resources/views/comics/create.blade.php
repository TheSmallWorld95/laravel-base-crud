@extends('layouts.app')

@section('main')
<main class="vertical">
  <div class="form">
    <form class="" action="{{ route('comics.store')}}" method="post">
      @csrf
      @method('POST')
      <input type="text" name="title" value="" placeholder="Title">
      <input type="text" name="thumb" value="" placeholder="Image">
      <input type="text" name="description" value="" placeholder="Description">
      <input type="number" name="price" value="" placeholder="Price">
      <input type="date" name="sale_date" value="" placeholder="Sale Date">
      <input type="text" name="series" value="" placeholder="Series">
      <input type="text" name="type" value="" placeholder="Type">
      <input type="submit" name="" value="Send">
    </form>
  </div>
</main>
@endsection
