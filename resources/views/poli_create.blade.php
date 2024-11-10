@extends('layouts.app_modern', ['title' => 'Tambah Poli'])
@section('content')
    <div class="card">
        <h5 class="card-header">Tambah Poli</h5>
        <div class="card-body">
            <form action="/poli" method="POST">
                @csrf
                <div class="form-group mt-1 mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" name="nama" id="nama" 
                           class="form-control @error('nama') is-invalid @enderror" 
                           value="{{ old('nama') }}" required>
                    <span class="text-danger">{{ $errors->first('nama') }}</span>
                </div>

                <div class="form-group mt-1 mb-3">
                    <label for="biaya" class="form-label">Biaya</label>
                    <input type="text" name="biaya" id="biaya" 
                           class="form-control @error('biaya') is-invalid @enderror" 
                           value="{{ old('biaya') }}" required>
                    <span class="text-danger">{{ $errors->first('biaya') }}</span>
                </div>

                <div class="form-group mt-1 mb-3">
                    <label for="keterangan" class="form-label">Keterangan</label>
                    <textarea name="keterangan" id="keterangan" 
                              class="form-control @error('keterangan') is-invalid @enderror">{{ old('keterangan') }}</textarea>
                    <span class="text-danger">{{ $errors->first('keterangan') }}</span>
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
@endsection
