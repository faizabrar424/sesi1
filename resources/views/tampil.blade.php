@extends('template')
@section('main')
    <h1>Tabel Siswa</h1>
    <a href="{{ url('siswa/create') }}" class="btn btn-primary">Tambah Siswa URL</a>
    {{-- <a href="{{ route('siswa/create') }}" class="btn btn-primary">Tambah Siswa Route</a> --}}
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">NIS</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">Sekolah</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $item->nis }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->alamat }}</td>
                <td>{{ $item->Sekolah->nama_sekolah }}</td>
                <td><a href="{{ route('siswa.edit', $item->id) }}" class="btn btn-warning">Update</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection