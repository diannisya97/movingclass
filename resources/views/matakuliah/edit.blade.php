@extends('layouts.app', ['title' => 'Tambah Mata Kuliah'])

@section('content')
    <div class="card">
        <div class="card-body" >
            <h1>Edit Mata Kuliah {{ $matakuliah->nama_matkul }}</h1>
            <form action="/matakuliah/{{ $matakuliah->id }}" method="post" enctype="multipart">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="kode_matkul">Kode Matakuliah</label>
                    <input type="text" class="form-control" id="kode_matkul" name="kode_matkul" value="{{ old('kode_matkul') ?? $matakuliah->kode_matkul }}">
                    <span class="text-danger"> {{ $errors->first('kode_matkul') }} </span>
                </div>
                <div class="form-group">
                    <label for="nama_matkul">Nama Matakuliah</label>
                    <input type="text" class="form-control" id="nama_matkul" name="nama_matkul" value="{{ old('nama_matkul') ?? $matakuliah->nama_matkul }}">
                    <span class="text-danger"> {{ $errors->first('nama_matkul') }} </span>
                </div>
                <div class="form-group">
                    <label for = sks_teori>SKS Teori</label>
                    <input type="number" class="form-control" id="sks_teori" name="sks_teori" value="{{ old('sks_teori') ?? $matakuliah->sks_teori }}">
                    <span class="text-danger"> {{ $errors->first('sks_teori') }} </span>
                </div>
                <div class="form-group">
                    <label for = sks_praktikum>SKS Praktikum</label>
                    <input type="number" class="form-control" id="sks_praktikum" name="sks_praktikum" value="{{ old('sks_praktikum') ?? $matakuliah->sks_praktikum }}">
                    <span class="text-danger"> {{ $errors->first('sks_praktikum') }} </span>
                </div>
                <div class="form-group">
                    <label for="foto">Foto</label>
                    <input type="file" class="form-control" id="foto" name="foto" >
                    <span class="text-danger"> {{ $errors->first('foto') }} </span>
                    <img src="{{\Storage::url($matakuliah->foto) }}" class="img-thumbnail mt-2" style="width: 100px">
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Ubah Data</button>
            </form>
        </div>
    </div>
@endsection

