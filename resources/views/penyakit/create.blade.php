@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Tambah Data Kspenyakit</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('kspenyakit.store') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="kegiatansawah_id" class="col-md-4 col-form-label text-md-right">Kegiatan
                                    Sawah</label>

                                <div class="col-md-6">
                                    <select class="form-control" name="kegiatansawah_id" id="kegiatansawah_id" required>
                                        <option value="">Pilih Kegiatan Sawah</option>
                                        @foreach ($kegiatansawah as $data)
                                            <option value="{{ $data->id }}">Sawah Ke - {{ $data->id }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            {{-- <div class="form-group row">
                            <label for="penyakit_id" class="col-md-4 col-form-label text-md-right">Penyakit</label>

                            <div class="col-md-6">
                                <select class="form-control" name="penyakit_id" id="penyakit_id" required>
                                    <option value="">Pilih Penyakit</option>
                                    @foreach ($penyakit as $data)
                                    <option value="{{ $data->id }}">{{ $data->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div> --}}

                            <div class="form-group row">
                                <label for="ks_penyakit_tanggal_terkena"
                                    class="col-md-4 col-form-label text-md-right">Tanggal Terkena</label>

                                <div class="col-md-6">
                                    <input id="ks_penyakit_tanggal_terkena" type="date"
                                        class="form-control @error('ks_penyakit_tanggal_terkena') is-invalid @enderror"
                                        name="ks_penyakit_tanggal_terkena" value="{{ old('ks_penyakit_tanggal_terkena') }}"
                                        required autocomplete="ks_penyakit_tanggal_terkena" autofocus>

                                    @error('ks_penyakit_keterangan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="penyakit_nama" class="col-md-4 col-form-label text-md-right">Nama Penyakit</label>
                            <div class="col-md-6">
                                <input id="penyakit_nama" type="text"
                                    class="form-control @error('penyakit_nama') is-invalid @enderror" name="penyakit_nama"
                                    value="{{ old('penyakit_nama') }}" required autocomplete="penyakit_nama" autofocus>

                                @error('penyakit_nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>

                    <div class="form-group row">
                        <label for="penyakit_gambar" class="col-md-4 col-form-label text-md-right">Gambar Penyakit</label>

                        <div class="col-md-6">
                            <input id="penyakit_gambar" type="file"
                                class="form-control @error('penyakit_gambar') is-invalid @enderror" name="penyakit_gambar"
                                value="{{ old('penyakit_gambar') }}" required autocomplete="penyakit_gambar" autofocus>

                                @error('penyakit_gambar')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="penyakit_keterangan" class="col-md-4 col-form-label text-md-right">Keterangan</label>

                        <div class="col-md-6">
                            <textarea id="penyakit_keterangan" class="form-control @error('penyakit_keterangan') is-invalid @enderror" name="penyakit_keterangan" value="{{ old('penyakit_keterangan') }}" required autocomplete="penyakit_keterangan" autofocus>
                            </textarea>
                            @error('penyakit_keterangan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Simpan
                                    </button>
                                    <a href="{{ route('kspenyakit.index') }}" class="btn btn-danger">Kembali</a>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    @endsection
