<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/bootstrap.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
        <link rel="shortcut icon" href="/images/pnp.png">
        <script type="text/javascript" src="{{ asset('assets') }}/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="{{ asset('assets') }}/js/bootstrap.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

    @include('info')
    <div class="container mt-5 text-center">
        <h1>Detail Buku</h1>
    </div>
    <div class="card mb-3 container ">
        <div class="row g-0">
        <div class="col-md-4">
            <img src="{{ asset('images/' . $buku->sampul) }}" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
            <div class="card-body">
            <h5 class="card-title">Judul Buku : {{ $buku->judul }}</h5>
            <p class="card-text">Pengarang : {{ $buku->pengarang }}</p>
            <p class="card-text">Deskripsi : {{ $buku->deskripsi }}</p>
            <p class="card-text">Kategori : {{ $buku->category->name }}</p>
            <a href="/" class="btn btn-success">Kembali</a>
            </div>
        </div>
        </div>
    </div>
</body>
</html>

