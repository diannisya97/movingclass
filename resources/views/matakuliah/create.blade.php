@extends('mylayout', ['title' => 'Tambah Mata Kuliah'])

@section('content')
    <div class="card">
        <div class="card-body" >
            <h1>Tambah Mata Kuliah</h1>
            <form action="/matakuliah" method="post">
                @csrf
                <div class="form-group">
                    <label for="kode_matkul">Kode Matakuliah</label>
                    <input type="text" class="form-control" id="kode_matkul" name="kode_matkul" value="{{ old('kode_matkul') }}">
                    <span class="text-danger"> {{ $errors->first('kode_matkul') }} </span>
                </div>
                <div class="form-group">
                    <label for="nama_matkul">Nama Matakuliah</label>
                    <input type="text" class="form-control" id="nama_matkul" name="nama_matkul" value="{{ old('nama_matkul') }}">
                    <span class="text-danger"> {{ $errors->first('nama_matkul') }} </span>
                </div>
                <div class="form-group">
                    <label for = sks_teori>SKS Teori</label>
                    <input type="number" class="form-control" id="sks_teori" name="sks_teori" value="{{ old('sks_teori') }}">
                    <span class="text-danger"> {{ $errors->first('sks_teori') }} </span>
                </div>
                <div class="form-group">
                    <label for = sks_praktikum>SKS Praktikum</label>
                    <input type="number" class="form-control" id="sks_praktikum" name="sks_praktikum" value="{{ old('sks_praktikum') }}">
                    <span class="text-danger"> {{ $errors->first('sks_praktikum') }} </span>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
@endsection

