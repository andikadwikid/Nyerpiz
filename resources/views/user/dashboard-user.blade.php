@extends('dashboard.main')
@section('content')
    @include('sweetalert::alert')

    <section class="section">
        <div class="section-header">
            <h1>Data Service</h1>
        </div>

        <div class="section-body">
        </div>
    </section>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    <section class="section">
        <div class="my-3">
            <a href="{{ route('user.form') }}" class="btn btn-icon icon-left btn-primary">
                <i class="far fa-edit"></i> Ajukan Servis</a>
        </div>
    </section>

    <section class="section">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4></h4>
                        <div class="card-header-action">
                            <form method="get" action="{{ route('dashboard.user') }}">
                                <div class="input-group">
                                    <input type="text" name="search" class="form-control" placeholder="Search">
                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-primary"><i
                                                class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped" id="servis-table">
                                <thead>
                                    <tr>
                                        <th class="text-center">
                                            <i class="fas fa-th"></i>
                                        </th>
                                        <th>Nomor Antri</th>
                                        <th>Nama Barang</th>
                                        <th>Merk barang</th>
                                        <th>Tanggal Servis</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($services as $service)
                                        <tr>
                                            <td>
                                                @if ($service->notif == 1)
                                                    <div class="sort-handler">
                                                        <span class="badge badge-warning">New</span>
                                                        {{-- <i class="fas fa-th"></i> --}}
                                                    </div>
                                                @endif
                                            </td>
                                            <td>{{ $service->nomor_antri }}</td>
                                            <td>{{ $service->nama_barang }}</td>
                                            <td>{{ $service->merk_barang }}</td>
                                            <td>{{ date('d-m-Y', strtotime($service->tanggal_servis)) }}</td>
                                            <td>@include('user.status')</td>
                                            <td><a href="{{ route('user.detail.show', $service->id) }}"
                                                    class="btn btn-primary">Detail</a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="7">
                                                <h3 class="text-center">Tidak ada data</h3>
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>

                        </div>
                        {{ $services->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
