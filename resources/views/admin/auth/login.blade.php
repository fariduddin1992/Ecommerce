@extends('admin.admin_layouts')

@section('admin_content')
        {{-- <div class="wrapper without_header_sidebar">
            <!-- contnet wrapper -->
            <div class="content_wrapper">
                    <!-- page content -->
                    <div class="login_page center_container">
                        <div class="center_content">
                            <div class="logo">
                                <img src="{{asset('public/panel/assets/images/logo.png')}}" alt="" class="img-fluid">
                            </div>
                            <form action="{{route('admin.login')}}" class="d-block" method="post">
                                @csrf
                                <div class="form-group icon_parent">
                                    <label for="email">E-mail</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email Address">
                                    <span class="icon_soon_bottom_right"><i class="fas fa-envelope"></i></span>
                                 @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                 @enderror
                                </div>
                                <div class="form-group icon_parent">
                                    <label for="password">Password</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    <span class="icon_soon_bottom_right"><i class="fas fa-unlock"></i></span>
                                </div>
                                <div class="form-group">
                                    <label class="chech_container">Remember me
                                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <a href="{{ route('admin.password.request') }}" class="text-white">I forgot my password</a>
                                    <button type="submit" class="btn btn-blue">Login</button>
                                </div>
                            </form>
                            <div class="footer">
                                <p>Copyright &copy; 2019 <a href="https://easylearningbd.com/">Easy Learning</a>. All rights reserved.</p>
                            </div>
                            
                        </div>
                    </div>
            </div><!--/ content wrapper -->
        </div><!--/ wrapper --> --}}

        <div class="d-flex align-items-center justify-content-center bg-sl-primary ht-100v">

            <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white">
              <div class="signin-logo tx-center tx-24 tx-bold tx-inverse">starlight <span class="tx-info tx-normal">admin</span></div>
              <div class="tx-center mg-b-60">Professional Admin Template Design</div>
              <form action="{{route('admin.login')}}" class="d-block" method="post">
                @csrf
              <div class="form-group">
                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email Address" placeholder="Enter your username">
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
             @enderror
              </div><!-- form-group -->
              <div class="form-group">
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <a href="" class="tx-info tx-12 d-block mg-t-10">Forgot password?</a>
              </div><!-- form-group -->
              <button type="submit" class="btn btn-info btn-block">Sign In</button>
      
              <div class="mg-t-60 tx-center">Not yet a member? <a href="page-signup.html" class="tx-info">Sign Up</a></div>
            </form>
            </div><!-- login-wrapper -->
          </div><!-- d-flex -->
@endsection
