@extends('dashboard.main')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Setting Profile</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('dashboard.user') }}">Data</a></div>
                <div class="breadcrumb-item">setting profile</div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                    <div class="card-header justify-content-center">
                        <h4>Profile</h4>
                    </div>
                    <div class="card-body">
                        <div class="user-item">
                            @if (Auth::user()->avatar && Auth::user()->password)
                                <div id="display_image" class="rounded-circle mx-auto d-block"
                                    style="background-image: url({{ asset('/storage/users/avatar/' . Auth::user()->avatar) }})">
                                </div>
                            @endif
                            @if (!Auth::user()->avatar)
                                <div id="display_image" class="rounded-circle mx-auto d-block"
                                    style="background-image: url('/img/avatar/avatar-1.png')"></div>
                            @endif
                        </div>
                        <form action="{{ route('profile.update', Auth::user()->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            @if (Auth::user()->password)
                                <div class="form-group">
                                    <input type="file" id="image_input" name="avatar" accept="image/*">
                                </div>
                            @endif
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="name" class="form-control"
                                    value="{{ old('name', $user->name) }}">
                                @error('name')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Nomor Telp</label>
                                <input type="text" name="no_telp" class="form-control"
                                    value="{{ old('no_telp', $user->no_telp) }}">
                                @error('name')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
    </section>
    <script>
        const image_input = document.querySelector("#image_input");
        image_input.addEventListener("change", function() {
            const reader = new FileReader();
            reader.addEventListener("load", () => {
                const uploaded_image = reader.result;
                document.querySelector("#display_image").style.backgroundImage = `url(${uploaded_image})`;
            });
            reader.readAsDataURL(this.files[0]);
        });
    </script>
@endsection
