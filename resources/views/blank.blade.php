@extends('dashboard.main')
@section('content')
    <div class="container">
        <input type="file" id="image_input" accept="image/png, image/jpg">
        <div id="display_image" class="rounded-circle author-box-picture"
            style="background-image: url('/img/avatar/avatar-1.png')"></div>
        {{-- <img alt="image" id="display_image" class="rounded-circle author-box-picture"
            src="{{ asset('img/avatar/avatar-1.png') }}"> --}}
        {{-- <img alt="image" src="../assets/img/avatar/avatar-1.png"> --}}
    </div>
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
