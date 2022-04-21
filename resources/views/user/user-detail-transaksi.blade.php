@extends('dashboard.main')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Detail Service</h1>
        </div>

        <div class="section-body">
        </div>
    </section>

    <section>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h4></h4>

                        @if ($transaksi->status == 0)
                            <div class="card-header-action">

                                <a href="{{ route('user.bayar', $transaksi->id) }}" class="btn btn-primary">Bayar</a>

                            </div>
                        @endif
                    </div>
                    <div class="card-body">
                        {{-- @if ($servis->status == 'pending' && !$servis->tindakan_servis)
                            <div class="form-group row">
                                <div class="alert alert-dark" role="alert">
                                    [Berhasil mengajukan servis, mohon tunggu konfirmasi dari admin untuk melakukan
                                    pembayaran.]
                                </div>
                            </div>
                        @endif --}}
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Status</label>
                            <div class="col-sm-9">
                                @include('admin.status-transaksi')
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nomor Antri</label>
                            <div class="col-sm-9">
                                {{ $transaksi->service->nomor_antri }}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Barang</label>
                            <div class="col-sm-9">
                                {{ $transaksi->service->nama_barang }}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Merk barang</label>
                            <div class="col-sm-9">
                                {{ $transaksi->service->merk_barang }}
                            </div>
                        </div>

                        @if ($transaksi->biaya_jemput)
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Biaya jemput</label>
                                <div class="col-sm-9">
                                    {{ $transaksi->biaya_jemput }}
                                </div>
                            </div>
                        @endif

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Estimasi Biaya</label>
                            <div class="col-sm-9">
                                @if ($transaksi->estimasi_biaya)
                                    {{ $transaksi->estimasi_biaya }}
                                @else
                                    <div class="d-inline-flex">
                                        <a href="" class="btn btn-success">minta estimasi biaya </a>
                                        <a class="fas fa-question-circle mx-3" data-toggle="popover" data-placement="bottom"
                                            data-content="Estimasi biaya adalah perkiraan biaya yang akan dibayar nanti, kemungkinan bisa kurang atau lebih"></a>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Total Bayar</label>
                            <div class="col-sm-9">
                                {{ $transaksi->total_bayar ?: '-' }}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Foto Barang</h4>
                    </div>
                    <div class="card-body">
                        <div class="chocolat-parent">
                            <a href="{{ Storage::url('public/services/' . $transaksi->service->image) }}"
                                class="chocolat-image" title="Just an example">
                                <div data-crop-image="300">
                                    <img alt="image"
                                        src="{{ Storage::url('public/services/' . $transaksi->service->image) }}"
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
