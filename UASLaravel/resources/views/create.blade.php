@extends('main')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-7">
        <h2 class="text-center">Biodata</h2><br>
        <form method="post" action="{{ url('/') }}">
            @csrf
            <div class="mb-3">
                <label for="nama" ><b>Nama</b></label>
                <input type="text" class="form-control" id="nama" value="Reyhan">
            </div>

            <div class="mb-3">
                <label for="umur" ><b>Umur</b></label>
                <input type="number" class="form-control" id="umur" value="18">
            </div>

            <div class="mb-3">
                <label for="tempat" ><b>Tempat Lahir</b></label>
                <input type="text" class="form-control" id="tempat" value="Indonesia">
            </div>

            <div class="mb-3">
                <label for="email" ><b>Email</b></label>
                <input type="email" class="form-control" id="email" value="reyhan@sulit.com">
            </div>

            <div class="mb-3">
                <button type="submit" style="background-color: #cdf1d0;" class="btn">Submit!</button>
            </div>

        </form>
    </div>
    </div>
@endsection
