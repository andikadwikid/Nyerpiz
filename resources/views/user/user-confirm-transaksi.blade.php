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
                            <h4>Konfirmasi Transaksi</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nomor Antri</label>
                                <p>{{ $transaksi->service->nomor_antri }}</p>
                            </div>

                            <div class="form-group">
                                <label>Nama Barang</label>
                                <p>{{ $transaksi->service->nama_barang }}</p>
                            </div>

                            <div class="form-group">
                                <label>Total Bayar</label>
                                <p>{{ $transaksi->total_bayar }}</p>
                            </div>

                            <div class="form-group mb-0">
                                <label>Bukti Pembayaran</label>
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
                        <h4>Bukti Pembayaran</h4>
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
