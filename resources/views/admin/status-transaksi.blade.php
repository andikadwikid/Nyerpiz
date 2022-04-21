@if ($transaksi->status == 0)
    <span class="badge badge-danger">Belum Bayar</span>
@endif
@if ($transaksi->status == 1)
    <span class="badge badge-success">Lunas</span>
@endif
