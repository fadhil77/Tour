@extends('auth.main_login')
@section('title', 'login')

@section('content')
{{-- <div class="container">
    <div class="forms-container">
      <div class="signin-signup">

        @if (Session::has('info'))
        <div class="alert alert-info" role="alert">
          {{ Session::get('info') }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        @endif

        @if (Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif



        @error('password')
          <div class="alert alert-danger" role="alert">
            {{ $message }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
        @enderror

        <form method="post" action="{{ route('signin') }}" class="sign-in-form">
            @csrf
          <h2 class="title">Sign in</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input id="email-login" type="text" placeholder="Email Address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="off" required />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input id="password" type="password" placeholder="Password" class="form-password @error('password') is-invalid @enderror" name="password" autocomplete="current-password" required />
          </div>
          <div class="form-input">
            <div class="custom-control custom-checkbox">
              <input class="custom-control-input form-check-input" type="checkbox" name="remember" id="remember">
              <label class="custom-control-label" style="padding: 3px;" for="remember"> {{ __('Remember Me') }}</label>
              @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="forget-link my-1 float-lg-right">
                  Forget Password ?
                </a>
                @endif

            </div>
          </div>
          <input type="submit" value="Login" class="btn solid" />
          <p class="social-text">Or Sign in with social platforms</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-google"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </form>

        @if(session('errors'))
            <div class="alert alert-danger" role="alert">
              Something it's wrong:
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
              </button>
            </div>
          @endif

          @error('username')
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

        <form action="{{route('register')}}" method="post" class="sign-up-form">
            @csrf
          <h2 class="title">Sign up</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input id="username" type="text" placeholder="Username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" autocomplete="off" required />
          </div>
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input id="password" type="password" placeholder="Password" class="form-password @error('password') is-invalid @enderror" name="password" autocomplete="current-password" required />
          </div>
          <input type="submit" class="btn" value="Sign up" />
          <p class="social-text">Or Sign up with social platforms</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-google"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>New here ?</h3>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
            ex ratione. Aliquid!
          </p>
          <button class="btn transparent" id="sign-up-btn">
            Sign up
          </button>
        </div>
        <img src="{{asset('img/register.svg')}}" class="image" alt="" />
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>One of us ?</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
            laboriosam ad deleniti.
          </p>
          <button class="btn transparent" id="sign-in-btn">
            Sign in
          </button>
        </div>
        <img src="{{asset('img/log.svg')}}" class="image" alt="" />
      </div>
    </div>
</div> --}}
        @error('name')
            <div class="alert alert-danger" role="alert">
              {{ $message }}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
          @enderror

          @error('password')
            <div class="alert alert-danger" role="alert">
              {{ $message }}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
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
              <h3>Sign In </h3>
              <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p>
            </div>
            <form method="POST" action="{{ route('signin') }}">
                @csrf
              <div class="form-group first">
                <label for="email">Email</label>
                <input id="email-login" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="off" required />

              </div>
              <div class="form-group last mb-4">
                <label for="password">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" value="{{ old('password') }}" autocomplete="off" required >

              </div>

              <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
                <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span>
              </div>

              <input type="submit" value="Log In" class="btn text-white btn-block btn-primary">

              <div class="mb-2 p-2">
                  <small style="font-size: 10px"> Not Registered yet?</small>
                  <a href="{{ route('register_login') }}" class="register-link">
                    Create an account
                </a>
            </div>

            <span class="d-block text-left my-4 text-muted text-center"> or sign in with</span>

            {{-- <input type="submit" value="Google" class="btn text-white btn-block btn-danger"> --}}
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
            </form>
            </div>
          </div>

        </div>

      </div>
    </div>
</div>
@endsection
