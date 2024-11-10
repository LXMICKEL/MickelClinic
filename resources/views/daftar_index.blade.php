@extends('layouts.app_modern', ['title' => 'Data Pendaftaran'])
@section('content')
    <div class="card">
        <h5 class="card-header">DATA PENDAFTARAN PASIEN</h5>
        <div class="card-body">
            <div class="row mb-3 mt-3">
                <div class="col-md-6">
                    <a href="/daftar/create" class="btn btn-primary btn-sm">Tambah Data</a>
                </div>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Tanggal Daftar</th>
                        <th>Poli</th>
                        <th>Keluhan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($daftar as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->pasien->nama }}</td>
                            <td>{{ $item->pasien->jenis_kelamin }}</td>
                            <td>{{ $item->tanggal_daftar }}</td>
                            <td>{{ $item->poli->nama }}</td>
                            <td>{{ $item->keluhan }}</td>
                            <td>
<<<<<<< HEAD
                                <a href="/daftar/{{ $item->id }}" class="btn btn-info btn-sm">Detail</a>
=======
>>>>>>> 55d0ab9c1c733b1f392eac9b25d610caf7af0d68
                                <form action="/daftar/{{ $item->id }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger btn-sm ml-2"
                                        onclick="return confirm('Yakin ingin menghapus data?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $daftar->links() !!}
        </div>
    </div>
@endsection
