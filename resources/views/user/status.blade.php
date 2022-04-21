@if ($service->status == 'pending')
    <span class="badge badge-warning">{{ $service->status }}</span>
@endif
@if ($service->status == 'proses')
    <span class="badge badge-info">{{ $service->status }}</span>
@endif
@if ($service->status == 'selesai')
    <span class="badge badge-success">{{ $service->status }}</span>
@endif
