@extends('layouts.admin')
@section('css')
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.master.restoran.update') }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nama_restoran">Nama Restoran</label>
                    <input type="text" name="nama_restoran" id="nama_restoran"
                        class="form-control {{ $errors->has('nama_restoran') ? 'is-invalid' : '' }}"
                        placeholder="Nama Restoran" value="{{ old('nama_restoran', $restoran->nama_restoran) }}">
                    @if ($errors->has('nama_restoran'))
                        <div class="invalid-feedback">
                            {{ $errors->first('nama_restoran') }}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="nama_pemilik">Nama Pemilik</label>
                    <input type="text" name="nama_pemilik" id="nama_pemilik"
                        class="form-control {{ $errors->has('nama_pemilik') ? 'is-invalid' : '' }}"
                        placeholder="Nama Restoran" value="{{ old('nama_pemilik', $restoran->nama_pemilik) }}">
                    @if ($errors->has('nama_pemilik'))
                        <div class="invalid-feedback">
                            {{ $errors->first('nama_pemilik') }}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat" id="alamat" class="form-control {{ $errors->has('alamat') ? 'is-invalid' : '' }}"
                        placeholder="Nama Restoran" value="" cols="30" rows="10">{{ old('alamat', $restoran->alamat) }}</textarea>
                    @if ($errors->has('alamat'))
                        <div class="invalid-feedback">
                            {{ $errors->first('alamat') }}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="kontak">Kontak</label>
                    <input type="text" name="kontak" id="kontak"
                        class="form-control {{ $errors->has('kontak') ? 'is-invalid' : '' }}" placeholder="Nama Restoran"
                        value="{{ old('kontak', $restoran->kontak) }}">
                    @if ($errors->has('kontak'))
                        <div class="invalid-feedback">
                            {{ $errors->first('kontak') }}
                        </div>
                    @endif
                </div>
                <button class="btn btn-primary">Simpan</button>

                <div class="card-body">
                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        <div class="col">
                            <div class="card">
                                <img src="image/gambar1.jpg" class="card-img-top" alt="..."> {{-- belum berhasil --}}
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural
                                        lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural
                                        lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('js')
@endsection
