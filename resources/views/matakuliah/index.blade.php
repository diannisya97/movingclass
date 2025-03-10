@extends('mylayout', ['title' => 'Data Mata Kuliah'])

@section('content')
<h5> Nama Mata Kuliah</h5>
<a href="{{ route('matakuliah.create') }}" class="btn btn-primary">Tambah Mata Kuliah</a>
<br>
<br>
<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Nama Mata Kuliah</th>
        <th>SKS Teori</th>
        <th>SKS Praktikum</th>
        <th>Aksi</th>
    </tr>
</table>
@endsection
