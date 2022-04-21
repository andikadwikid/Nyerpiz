@extends('dashboard.main')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Konfirmasi Servis</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('dashboard.user') }}">Data</a></div>
                <div class="breadcrumb-item"></div>
            </div>
        </div>

        <div class="section-body">
        </div>
    </section>
    <section class="section">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                    <form action="{{ route('admin.confirm.store', $service->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="card-body">

                            <div class="form-group">
                                <label>Nama Barang</label>
                                <p>{{ $service->nama_barang }}</p>
                                <input type="hidden" name="nama_barang" class="form-control outline-none" readonly
                                    value="{{ $service->nama_barang }}">
                            </div>
                            <div class="form-group">
                                <label>Merk barang</label>
                                <p>{{ $service->merk_barang }}</p>
                                <input type="hidden" name="merk_barang" class="form-control" readonly
                                    value="{{ $service->merk_barang }}">
                            </div>
                            <div class="form-group">
                                <label>Nomor telp</label>
                                <p>{{ $service->no_telp }}</p>
                                <input type="hidden" name="no_telp" class="form-control" readonly
                                    value="{{ $service->no_telp }}">

                            </div>
                            <div class="form-group">
                                <label>Keluhan</label>
                                <p>{{ $service->keluhan }}</p>
                                <textarea name="keluhan" class="form-control" readonly hidden>{{ $service->keluhan }}</textarea>
                            </div>

                            @if ($service->layanan == 1)
                                <div class="form-group">
                                    <label class="form-label">Biaya jasa jemput</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Rp.</span>
                                        </div>
                                        <input name="biaya_jemput" type="number" class="form-control"
                                            value="{{ old('biaya_jemput') }}" placeholder="Masukan biaya jasa jemput">
                                    </div>
                                </div>
                                @error('biaya_jemput')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            @endif

                            <div class="form-group">
                                <label class="form-label">Tindakan Service</label>
                                <input name="tindakan_servis" type="date" class="form-control"
                                    value="{{ old('tindakan_servis') }}">
                                @error('tindakan_servis')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                        </div>
                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Foto Barang</h4>
                    </div>
                    <div class="card-body">
                        <div class="chocolat-parent">
                            <a href="{{ Storage::url('public/services/' . $service->image) }}" class="chocolat-image"
                                title="Just an example">
                                <div data-crop-image="300">
                                    <img alt="image" src="{{ Storage::url('public/services/' . $service->image) }}"
                                        class="img-fluid mx-auto d-block">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </section>
@endsection
