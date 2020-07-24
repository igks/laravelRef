@extends('layout.main')

@section('title', 'Detail Mahasiswa')

@section('container')
<div class="container">
    <div class="ro">
        <div class="col-6">
            <h1 class="mt-3">Detail Mahasiswa</h1>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$student -> nama}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$student -> nrp}}</h6>
                    <p class="card-text">{{$student -> email}}</p>
                    <p class="card-text">{{$student -> jurusan}}</p>

                    <a href="/students" class="btn btn-secondary">Back</a>
                    <a href="{{$student->id}}/edit" class="btn btn-primary">Edit</a>
                    <form action=" {{$student -> id}}" method="post">
                        @method('delete')
                        @csrf
                        <button type="sumbit" class="btn btn-danger"
                            onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
