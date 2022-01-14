@include('hr.head')
<title>forget Account</title>
<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
<body>
    <div class="limiter">
        <div class="container-login100" style="background-image: url('img/mockup4.jpg');">
            <div class="wrap-login100 p-t-30 p-b-50">
                <span class="login100-form-title p-b-41">
                    Forget Password
                </span>
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class=" login100-form pt-3 pb-3"> 
                           <!--  <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-2">Forgot Your Password?</h1>
                                <p class="mb-4">We get it, stuff happens. Just enter your email address below
                                and we'll send you a link to reset your password!</p>
                            </div> -->
                            @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                            @endif
                            <form method="POST" class="user" action="{{ route('password.email') }}">
                                @csrf
                                <div class="wrap-input100 validate-input" data-validate = "Enter username">
                                    <input id="email" type="email" class=" input100 @error('email') is-invalid @enderror" name="email" placeholder="Email Address" value="{{ old('email') }}" required autocomplete="off">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                                </div>
                                <div class="container-login100-form-btn m-t-32">
                                    <button type="submit" class="login100-form-btn mt-3">
                                        Reset Password
                                    </button>
                                </div>
                            </form> 

                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <div class="p-3">
                                       <!--  <div class="text-right">
                                            <a href="{{ route('register') }}" style="text-decoration:none;">Create an Account!</a>
                                        </div> -->
                                        <div class="text-right">
                                            <small><i>Already have an account?</i> <a href="{{ route('login') }}" style="text-decoration:none;"> Login!</a>
                                            </small>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="dropDownSelect1"></div>
</body>
</html>
