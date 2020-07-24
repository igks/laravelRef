@extends('layout.main')

@section('title', 'Daftar Mahasiswa')

@section('container')
<div class="container">
  <div class="ro">
    <div class="col-6">
      <h1 class="mt-3">Daftar Mahasiswa</h1>
      
      <a href="/students/create">Tambah Mahasiswa</a>
      @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
      <ul class="list-group">
        @foreach($students as $student)
        <li class="list-group-item d-flex justify-content-between align-items-center mb-3">
          {{$student -> nama}}
          <a href="/students/{{$student -> id}}" class="badge badge-info">detail</a>
        </li>
        @endforeach
      </ul>
    </div>
  </div>
</div>
@endsection