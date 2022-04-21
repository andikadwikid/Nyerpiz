@extends('dashboard.main')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Detail Service Admin</h1>
        </div>

        <div class="section-body">
        </div>
    </section>

    <section>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                    @if ($servis->status == 'pending' && !$servis->tindakan_servis)
                        <div class="card-header">
                            <h4></h4>
                            <div class="card-header-action">
                                <a href="{{ route('admin.confirm.servis', $servis->id) }}"
                                    class="btn btn-success">Konfirmasi</a>
                            </div>
                        </div>
                    @endif

                    @if ($servis->status == 'pending' && $servis->tindakan_servis)
                        <div class="card-header">
                            <h4></h4>
                            <div class="card-header-action">
                                <span class="btn btn-success">Terkonfirmasi</span>
                            </div>
                        </div>
                    @endif

                    <div class="card-body">
                        @if ($servis->status == 'pending' && !$servis->tindakan_servis)
                            <div class="form-group row">
                                <div class="alert alert-dark alert-dismissible mx-auto d-block fade show" role="alert">
                                    [Berhasil mengajukan servis, mohon tunggu konfirmasi dari admin untuk melakukan
                                    pembayaran.]
                                    {{-- <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button> --}}
                                </div>
                            </div>
                        @endif
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nomor Antri</label>
                            <div class="col-sm-9">
                                {{ $servis->nomor_antri }}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nama Barang</label>
                            <div class="col-sm-9">
                                {{ $servis->nama_barang }}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Merk Barang</label>
                            <div class="col-sm-9">
                                {{ $servis->merk_barang }}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Alamat</label>
                            <div class="col-sm-9">
                                {{ $servis->alamat }}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nomor Telepon</label>
                            <div class="col-sm-9">
                                {{ $servis->no_telp }}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Keluhan</label>
                            <div class="col-sm-9">
                                {{ $servis->keluhan }}
                            </div>
                        </div>

                        @php
                            if ($servis->layanan == 0) {
                                $servis->layanan = 'Antar ke toko';
                            } else {
                                $servis->layanan = 'Jemput ke rumah';
                            }
                        @endphp
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Layanan</label>
                            <div class="col-sm-9">
                                {{ $servis->layanan }}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tanggal Servis</label>
                            <div class="col-sm-9">
                                {{ date('d-m-Y H:i:s', strtotime($servis->tanggal_servis)) }}
                            </div>
                        </div>

                        @if ($servis->tindakan_servis)
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Tindakan Servis</label>
                                <div class="col-sm-9">
                                    {{ date('d-m-Y', strtotime($servis->tanggal_servis)) }}
                                </div>
                            </div>
                        @endif

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
                            <a href="{{ Storage::url('public/services/' . $servis->image) }}" class="chocolat-image"
                                title="Just an example">
                                <div data-crop-image="300">
                                    <img alt="image" src="{{ Storage::url('public/services/' . $servis->image) }}"
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
