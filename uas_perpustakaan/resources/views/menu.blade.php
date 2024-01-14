<!--awal MENU NAVBAR-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perpustakaan PNP | @yield('title','Website')</title>

        <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/bootstrap.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
        <script type="text/javascript" src="{{ asset('assets') }}/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="{{ asset('assets') }}/js/bootstrap.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link href="/assets/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">


</head>
<body>
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container  hover-overlay">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/home">Home</a>
                    </li>
                    @auth
                    <li class="nav-item">
                        <a class="nav-link" href="/buku">Data Buku</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/anggota">Data Anggota</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/petugas">Data Petugas</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/pinjam">Data Peminjaman</a>
                    </li>
                    @endauth
                    @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person"></i> {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <form action="/logout" method="post">
                                @csrf
                                <li>
                                    <button type="submit" class="dropdown-item">Logout</button>
                                </li>
                            </form>
                        </ul>
                    </li>
                    @else
                    <li class="nav-item ">
                        <a class="nav-link " href="/login"><i class="bi bi-person-fill-lock"></i> Login</a>
                    </li>
                    @endauth
                </ul>
            </div>
        </nav>
    </div>

    <script src="/assets/bootstrap.bundle.min.js"></script>
</body>
</html>

<!--akhir MENU NAVBAR-->
