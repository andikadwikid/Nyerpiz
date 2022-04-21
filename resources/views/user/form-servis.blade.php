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
                    <form action="{{ route('user.form.post') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-header">
                            <h4>Silakan lengkapi data</h4>
                        </div>
                        <div class="card-body">
                            <input type="hidden" name="nomor_antri" value="{{ $nomor }}">

                            <div class="form-group">
                                <label>Nama Barang</label>
                                <input type="text" name="nama_barang" class="form-control"
                                    placeholder="Contoh: Smartphone/TV/Kulkas" value="{{ old('nama_barang') }}">
                                @error('nama_barang')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Merk barang</label>
                                <input type="text" name="merk_barang" class="form-control"
                                    value="{{ old('merk_barang') }}">
                                @error('merk_barang')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea name="alamat" class="form-control"
                                    placeholder="Masukan alamat dengan lengkap">{{ old('alamat') }}</textarea>
                                @error('alamat')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Nomor telp</label>
                                <input type="number" name="no_telp" class="form-control"
                                    placeholder="Contoh: 082122334455" {{ old('no_telp') }}>
                                @error('no_telp')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Layanan</label><br>
                                <input type="radio" id="0" name="layanan" value="0">
                                <label for="0">Antar barang ke Toko</label>
                                <a class="fas fa-question-circle mx-3" data-container="body" data-toggle="popover"
                                    data-placement="right" data-content="Bawa barang sendiri ke toko.">
                                </a><br>
                                <input type="radio" id="1" name="layanan" value="1">
                                <label for="1">Minta jemput ke rumah</label><a class="fas fa-question-circle mx-3"
                                    data-container="body" data-toggle="popover" data-placement="right"
                                    data-content="Kami jemput barang anda, akan tetapi ada biaya tambahan.">
                                </a>
                            </div>
                            <div class="form-group">
                                <label>Keluhan</label>
                                <textarea name="keluhan" class="form-control"
                                    placeholder="Jelaskan secara lengkap mengenai kerusakan">{{ old('keluhan') }}</textarea>
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
                        <img id="file-ip-1-preview" class="img-fluid mx-auto d-block">
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
