@extends('layout.main')
@section('title', 'Profile Museum Komodo')
@section('content')
{{-- <div class="breadcrumb"> --}}
    <ul class="breadcrumb_content">
        <li><a href="#">Profile</a></li>
        <li>Taman Burung</li>
      </ul>
{{-- </div> --}}

<div class="container-taman mt-5">
    <!-- Post content-->
    <div class="article">
        <!-- Post header-->
        <header class="mb-4 header_taman">
            <!-- Post title-->
            <h1 class="fw-bolder mb-1">Welcome to Blog Post!</h1>
        </header>
        <!-- Preview image figure-->
        {{-- <div class="gambar_taman"> --}}
            <img class="responsive" src="https://dummyimage.com/900x400/ced4da/6c757d.jpg" alt="..."/>

        {{-- </div> --}}
        <!-- Post content-->
        <div class="mb-5 content_taman">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>
        <div class="peta">
            <div id="map" class="maps"></div>
        </div>
    </div>
</div>
@endsection
