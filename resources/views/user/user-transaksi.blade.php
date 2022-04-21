@extends('dashboard.main')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Data Transaksi</h1>
        </div>

        <div class="section-body">
        </div>
    </section>

    <section class="section">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4></h4>
                        <div class="card-header-action">
                            {{-- <form method="get" action="{{ route('dashboard.search.admin') }}">
                                <div class="input-group">
                                    <input type="text" name="search" class="form-control" placeholder="Search">
                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-primary"><i
                                                class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </form> --}}
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
                                        <th>No Antri</th>
                                        <th>Status</th>
                                        <th>Tanggal</th>
                                        <th>Total Bayar</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($transactions as $transaksi)
                                        <tr>
                                            <td>
                                                <div class="sort-handler">
                                                    <span class="badge badge-warning">New</span>

                                                </div>
                                            </td>
                                            <td>{{ $transaksi->service->nomor_antri }}</td>
                                            <td>@include('admin.status-transaksi')</td>
                                            <td>{{ date('d-m-Y', strtotime($transaksi->created_at)) }}</td>
                                            <td>{{ $transaksi->total_bayar ?: '-' }}</td>

                                            <td><a href="{{ route('user.show.transaksi', $transaksi->id) }}"
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
                        {{ $transactions->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
