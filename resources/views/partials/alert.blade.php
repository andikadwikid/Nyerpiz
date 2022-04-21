@if (session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-error">
        {{ session('error') }}
    </div>
@endif

{{-- @if (session('berhasil_update'))
    <div class="alert alert-success">
        {{ session('berhasil_update') }}
    </div>
@endif

@if (session('gagal_update'))
    <div class="alert alert-error">
        {{ session('gagal_update') }}
    </div>
@endif

@if (session('berhasil_delete'))
    <div class="alert alert-success">
        {{ session('berhasil_delete') }}
    </div>
@endif

@if (session('gagal_delete'))
    <div class="alert alert-error">
        {{ session('gagal_delete') }}
    </div>
@endif --}}
