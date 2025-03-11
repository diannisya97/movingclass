@extends('mylayout', ['title' => 'Data Mata Kuliah'])

@section('content')
<h5> Nama Mata Kuliah</h5>
<a href="{{ route('matakuliah.create') }}" class="btn btn-primary">Tambah Mata Kuliah</a>
<br>
<br>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode Mata Kuliah</th>
            <th>Nama Mata Kuliah</th>
            <th>SKS Teori</th>
            <th>SKS Praktikum</th>
            <th>Aksi</th>
        </tr>

    </thead>
    <tbody>
        @foreach ($matakuliah as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->kode_matkul }}</td>
            <td>{{ $item->nama_matkul }}</td>
            <td>{{ $item->sks_teori }}</td>
            <td>{{ $item->sks_praktikum }}</td>
            <td>
                <a href="{{ route('matakuliah.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                <a href="{{ route('matakuliah.destroy', $item->id) }}" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
{{ $matakuliah->links() }}

@endsection
