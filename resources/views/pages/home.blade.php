@extends('layout.main')
@section('title','list movie')
@section('navMovie','active')
@section('container')

<style>
    .card-text {
      display: -webkit-box;
      -webkit-line-clamp: 3; /* Jumlah baris */
      -webkit-box-orient: vertical;
      overflow: hidden;
      text-overflow: ellipsis;
    }
    .card{
        border-radius: 10px
    }
    </style>

<h1 style="font-size : 45px">Popular Movies</h1>

<div class="row row-cols-1 row-cols-md-2 gx-4 gy-4">
    @foreach ($movies as $movie)
    <div class="col">
        <div class="card mb-3" style="max-width: 500px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ $movie['cover_image'] }}" class="img-fluid " style="border-top-left-radius: 10px; border-bottom-left-radius: 10px" alt="..."
                    >
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{ $movie['title'] }}</h5>
                        <p class="card-text">{{ $movie['synopsis'] }}
                        </p>
                        <a href="" class="btn btn-success">Lihat Selanjutnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
<div class="mt-4">
    {{ $movies->links('pagination::bootstrap-5') }}
  </div>



@endsection