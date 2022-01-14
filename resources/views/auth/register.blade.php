@extends('auth.main_login')
@section('title', 'Register')

@section('content')
          @error('name')
            <div class="alert alert-danger" role="alert">
              {{ $message }}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          @enderror

          @error('email')
            <div class="alert alert-danger" role="alert">
              {{ $message }}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          @enderror

          @error('password')
            <div class="alert alert-danger" role="alert">
              {{ $message }}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          @enderror
<div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6 order-md-2">
          <img src="{{ asset('asset_login/images/undraw_file_sync_ot38.svg') }}" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4 text-center">
              <h3>Sign Up </h3>
              <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p>
            </div>
            <form method="POST" action="{{ route('register') }}">
                @csrf
              <div class="form-group first">
                <label for="name">Username</label>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="off" required />

              </div>
              <div class="form-group first">
                <label for="email">Email</label>
                <input id="email-login" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="off" required />

              </div>
              <div class="form-group last mb-4">
                <label for="password">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" value="{{ old('password') }}" autocomplete="off" required >

              </div>

              {{-- <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
                <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span>
              </div> --}}

              <input type="submit" value="Sign up" class="btn text-white btn-block btn-primary">

              <span class="d-block text-left my-4 text-muted text-center"> or sign up with</span>

              <div class="social-login text-center">
                <a href="{{ url('auth/google') }}" class="google">
                  <span class="icon-google mr-3"></span>
                </a>
                <a href="{{ url('auth/facebook') }}" class="facebook">
                  <span class="icon-facebook mr-3"></span>
                </a>
              </div>
              <div class="row mb-2 justify-content-center">
                <a href="{{ url('/home') }}" class="back-home">
                  <span>Back To Home</span>
                </a>
              </div>
              </div>
            </form>
            </div>
          </div>

        </div>

      </div>
    </div>
</div>
@endsection

