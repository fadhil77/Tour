@extends('layout.main')
@section('title', '')
@section('content')
{{-- <div class="breadcrumb"> --}}
    <ul class="breadcrumb_content">
        <li><a href="{{ route('artikel') }}">Artikel</a></li>
        <li>Kategori</li>
        <li>Profile Taman Burung</li>
      </ul>
{{-- </div> --}}

<div class="container-taman mt-5">
    @if ($data == true)
            <!-- Post content-->
            <div class="article">
                <!-- Post header-->
                <header class="mb-4 header_taman">
                    <!-- Post title-->
                    <h1 class="fw-bolder mb-1">{{ $artikel->judul }}</h1>
                    <!-- Post meta content-->
                    <div class="posted_taman">Posted on {{ date('d, M Y H:i', strtotime($artikel->created_at)); }}</div>
                </header>
                <img class="responsive" src="{{ asset('file/'.$artikel->image) }}" alt="..."/>
                <!-- Post content-->
                <div class="mb-5 content_tamans">
                    <p>{!! $artikel->konten !!}</p>
                </div>
            </div>
    @else
        <div class="article">
                <!-- Post header-->
                <header class="mb-4 header_taman">
                    <!-- Post title-->
                    <h1 class="fw-bolder mb-1">Welcome to Blog Post!</h1>
                    <!-- Post meta content-->
                    <div class="posted_taman">Posted on January 1, 2021 by Start Bootstrap</div>
                    <!-- Post categories-->
                </header>
                <!-- Preview image figure-->
                    <img class="rounded" src="https://dummyimage.com/900x400/ced4da/6c757d.jpg" alt="..." width="600" height="400" />
                </figure>
                <!-- Post content-->
                <div class="mb-5 content_tamans">
                    <p >Science is an enterprise that should be cherished as an activity of the free human mind. Because it transforms who we are, how we live, and it gives us an understanding of our place in the universe.</p>
                </div>
        </div>
    @endif
</div>
@endsection
