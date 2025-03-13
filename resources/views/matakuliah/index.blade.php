@extends('layouts.app')

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
            <th>Foto</th>
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
                @if ($item->foto)
                    <img src="{{ Storage::url($item->foto) }}" alt="" style="width:"50>
                @endif
            </td>
            <td>
                <a href="/matakuliah/{{ $item->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
               <form action="/matakuliah/{{ $item->id }}" method="post" class="d-inline">
                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</button>
               </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
{{ $matakuliah->links() }}

@endsection
