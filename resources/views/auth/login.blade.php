{{--
<x-guest-layout>
     <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>

 --}}

<x-guest-layout>
     <!-- start of banner -->
    <!-- Hero Section Begin -->


    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 col-md-4">
                <form class="login100-form validate-form" method="POST" {{ route('login') }} >
                    @csrf
                    <span class="login100-form-title p-b-26">
                        Login Form
                    </span>

                    <x-jet-validation-errors class="mb-4 text-red" />

                    {{-- <span class="login100-form-title p-b-26 logos">
                        <img src="{{asset('assets/front/img/logo.jpg')}}"  class="img img-circle">
                    </span> --}}


                    @foreach (['danger','warning','success','info'] as $msg)
                    @if (Session::has('alert-'.$msg))
                    <p class="alert alert-{{$msg}}" >{{Session::get('alert-'.$msg)}} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>

                    @endif

                    @endforeach

                    <div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
                        <input class="input100" name="email" type="email" name="email" :value="old('email')" required autofocus >
                        <span class="focus-input100" data-placeholder="Enter Email"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <span class="btn-show-pass">
                            <i class="zmdi zmdi-eye"></i>
                        </span>
                        <input class="input100" name="password" type="password" name="password" required autocomplete="current-password">
                        <span class="focus-input100" data-placeholder="Enter Password"></span>
                    </div>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                                    <button class="login100-form-btn" id="logbutton">
                                       Login
                                      <div class="spinner-border m-5" style="width: 3rem; height: 3rem;display:none" role="status" id="loader">
                                      </div>
                                    </button>


                        </div>
                    </div>
                    <br>
                    <div class="text-center ">
                        <span class="txt">
                            Don’t have an account?
                        </span>

                        <a  href="{{route('register')}}" class="signuping">
                            Register Here
                        </a>
                    </div>
                </form>
            </div>
        </div>
        <script>
            document.getElementById("logbutton").addEventListener("click", function() {
            document.getElementById("loader").style.display="block";
            });
        </script>
    </div>
    <!-- Hero Section End -->
    <!-- end of banner -->
</x-guest-layout>
