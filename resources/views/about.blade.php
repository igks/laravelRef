@extends('layout.main')

@section('title', 'About page')

@section('container')
<div class="container">
  <div class="ro">
    <div class="col-10">
      <h1 class="mt-3">About Page</h1>
      <p><?= $variable ?></p>
      <p>{{$variable}}</p>
    </div>
  </div>
</div>
@endsection