@extends('main')

@section('content')
    <div class="container">
        @if (session()->get('berhasil'))
            <div class="alert align-items-center text-center" style="background-color: green">
                <div style="color: white">
                    {{ session()->get('berhasil') }}
                </div>
            </div>

            <table class="table round"">
                <tbody>
                    <tr>
                        <th style="background-color: #cdf1d0">Nama</th>
                        <td>{{ $nama }}</td>
                    </tr>
                    <tr>
                        <th style="background-color: #cdf1d0">Umur</th>
                        <td>{{ $umur }}</td>
                    </tr>
                    <tr>
                        <th style="background-color: #cdf1d0">Tempat</th>
                        <td>{{ $tempat }}</td>
                    </tr>
                    <tr>
                        <th style="background-color: #cdf1d0">Email</th>
                        <td>{{ $email }}</td>
                    </tr>
                </tbody>
            </table>
        @endif

        <h2 class="text-center">Penyusun</h2>
        <br>
        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="card" >
                    <h3 class="text-center mt-3">Ilham Fitri Ardiansyah</h3>
                    <div class="card-body">
                      <p class="card-text text-center">20104410048</p>
                    </div>
                  </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card" >
                    <h3 class="text-center mt-3">Khresna Wibi Prayogo</h3>
                    <div class="card-body">
                      <p class="card-text text-center">20104410054</p>
                    </div>
                  </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card" >
                    <h3 class="text-center mt-3">Nugraha Yoga Herlambang</h3>
                    <div class="card-body">
                      <p class="card-text text-center">20104410049</p>
                    </div>
                  </div>
            </div>
        </div>

    </div>
@endsection
