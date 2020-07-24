@extends('layout.main')

@section('title', 'Ubah Mahasiswa')

@section('container')
<div class="container">
    <div class="ro">
        <div class="col-10">
            <h1 class="mt-3">Ubah Data Mahasiswa</h1>
            <form method="post" action="/students/{{$student->id}}">
                @method('put')
                @csrf
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control @error ('nama') is-invalid @enderror" id="nama"
                        placeholder="Nama" name="nama" value="{{$student -> nama}}">
                    @error('nama')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>NRP</label>
                    <input type="text" class="form-control @error ('nrp') is-invalid @enderror" id=" nrp"
                        placeholder="NRP" name="nrp" value="{{$student -> nrp}}">
                    @error('nrp')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Email" name="email"
                        value="{{$student -> email}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Jurusan</label>
                    <input type="text" class="form-control" id="nama" placeholder="Jurusan" name="jurusan"
                        value="{{$student -> jurusan}}">
                </div>
                <button class="btn btn-primary" type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
