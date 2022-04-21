@extends('dashboard.main')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Pengajuan Servis</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('dashboard.user') }}">Data</a></div>
                <div class="breadcrumb-item">Form servis</div>
            </div>
        </div>

        <div class="section-body">
        </div>
    </section>
    <section class="section">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                    <form action="{{ route('user.form.update', $service->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="card-header">
                            <h4>Ubah Data Servis</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nama Barang</label>
                                <input type="text" name="nama_barang" class="form-control"
                                    placeholder="Contoh: Smartphone/TV/Kulkas"
                                    value="{{ old('nama_barang', $service->nama_barang) }}">
                                @error('nama_barang')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Merk barang</label>
                                <input type="text" name="merk_barang" class="form-control"
                                    value="{{ old('merk_barang', $service->merk_barang) }}">
                                @error('merk_barang')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea name="alamat" class="form-control"
                                    placeholder="Masukan alamat dengan lengkap">{{ old('alamat', $service->alamat) }}</textarea>
                                @error('alamat')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Nomor telp</label>
                                <input type="number" name="no_telp" class="form-control"
                                    placeholder="Contoh: 082122334455" value="{{ old('no_telp', $service->no_telp) }}">
                                @error('no_telp')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Keluhan</label>
                                <textarea name="keluhan" class="form-control"
                                    placeholder="Jelaskan secara lengkap mengenai kerusakan">{{ old('keluhan', $service->keluhan) }}</textarea>
                                @error('keluhan')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group mb-0">
                                <label>Foto barang</label>
                                <input type="file" name="image" class="form-control" id="file-ip-1" accept="image/*"
                                    onchange="showPreview(event);">
                                @error('image')
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
                        <img src="{{ Storage::url('public/services/' . $service->image) }}" id="file-ip-1-preview"
                            class="img-fluid mx-auto d-block">
                    </div>
                </div>
            </div>

        </div>
    </section>

    <script>
        function showPreview(event) {
            if (event.target.files.length > 0) {
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById("file-ip-1-preview");
                preview.src = src;
                preview.style.display = "block";
            }
        }
    </script>
@endsection
