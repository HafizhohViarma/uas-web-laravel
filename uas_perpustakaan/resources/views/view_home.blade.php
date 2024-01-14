@extends('index')
@section('title', 'Home')

@section('isihalaman')
    <div class="container">
        <h2 class="text-center m-2">Daftar Buku Tersedia</h2>
        <div class="d-flex justify-content-end mb-2">
            <form action="/" class="d-flex" role="search">
                <input class="form-control me-2" type="search" name="search" placeholder="Search"
                    aria-label="Search">
                <button class="btn btn-primary" type="submit">Search</button>
            </form>
        </div>
        <div class="row mt-4">
            @foreach($bukuData as $buku)
                <div class="col-md-3 mb-4">
                    <div class="card" style="height:100%">
                        <a href="{{ route('buku.lihat', $buku->id_buku) }}">
                            <img src="{{ asset('images/' . $buku->sampul) }}" class="card-img-top" alt="{{ $buku->judul }}">
                        </a>
                        <p class="text-center"><b>{{ $buku->judul }}</b></p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
