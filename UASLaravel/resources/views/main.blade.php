<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Biodata</title>
    <!-- Boostrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<body>
    @include('navbar')

    <div style="margin-top: 8%;" class="container">
        @yield('content')
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#cdf1d0" fill-opacity="1" d="M0,128L60,128C120,128,240,128,360,112C480,96,600,64,720,85.3C840,107,960,181,1080,197.3C1200,213,1320,171,1380,149.3L1440,128L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
<!-- Footer -->
<footer class="text-dark text-center pb-3" style="background-color: #cdf1d0;">
  <p>Dibuat <i class="text-danger bi bi-heart-fill"></i> oleh <a class="text-dark fw-bold" href="https://www.instagram.com/heilhamf">Ilham | Khresna | Nugraha</a></p>
</footer>
</body>
</html>
