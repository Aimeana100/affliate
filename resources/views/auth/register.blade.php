{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}

<x-guest-layout>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="MUHAHE Template">
        <meta name="keywords" content="MUHAHE, unica, creative, html">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Muhahe Affiliate || Earn money infinetely</title>
        <!-- Css Styles -->
        <link rel="stylesheet" href="{{asset('assets/front/css/jquery-ui.min.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('assets/front/css/booststrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/front/css/font-awesome.min.css')}}">
        <link rel="icon" href="{{asset('assets/front/img/log1.png')}}">
        @livewireStyles
    </head>




    <!-- start of banner -->
    <!-- Hero Section Begin -->

    <div class="limiters">
        <div class="container-login100" >
            <div class="wrap-login100 col-md-4" style="margin-top: 5px;">



                <form class="login100-form validate-form" action="{{route('register')}}" method="POST">
                    @csrf
                    <span class="login100-form-title">
                        Register Form
                    </span><br>
                    {{-- <span class="login100-form-title p-b-26 logos">
                        <img src="{{asset('assets/front/img/logo.jpg')}}"  class="img img-circle">
                    </span> --}}

                    @foreach (['danger','warning','success','info'] as $msg)
                    @if (Session::has('alert-'.$msg))
                    <div class="alert alert-{{$msg}}" role="alert">{{Session::get('alert-'.$msg)}} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></div>

                    @endif

                    @endforeach


                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


                    <div class="wrap-input100 validate-input" >
                        <input class="input100" type="text" name="name">
                        <span class="focus-input100" data-placeholder="Enter Your Full Name"></span>
                    </div>

                    <div class="wrap-input100 validate-input" >
                        <input class="input100" type="text" name="phone">
                        <span class="focus-input100" data-placeholder="Enter Your Phone"></span>
                    </div>
                    {{-- @error('full_name')
                    <span class="text-danger " data-placeholder="Enter Your Full Name"> {{$message}} </span>
                    @enderror --}}

                    <div class="wrap-input100 validate-input" >
                        <select name="country" class="form-control selectpicker" >
                            <option disabled="disabled" selected="selected">Select Country</option>
                            <option value="1" >Rwanda</option>
                            <option value="2" >Burundi</option>
                            <option value="3" >Uganda</option>
                        </select>
                  </div>

                    <div class="wrap-input100 validate-input">
                        <input class="input100" type="text" name="referee">
                        <span class="focus-input100" data-placeholder="Enter Your Referee Id"></span>
                    </div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="text" name="email">
						<span class="focus-input100" data-placeholder="Enter Your Email"></span>
					</div>


                    <div class="wrap-input100 validate-input">
                        <span class="btn-show-pass">
                            <i class="zmdi zmdi-eye"></i>
                        </span>
                        <input class="input100" type="password" name="password">
                        <span class="focus-input100 border border-top-1" data-placeholder="Enter Your Password"></span>
                    </div>

                    <div class="wrap-input100 validate-input">
                        <span class="btn-show-pass">
                            <i class="zmdi zmdi-eye"></i>
                        </span>
                        <input class="input100" type="password" name="password_confirmation">
                        <span class="focus-input100" data-placeholder="ReEnter Password"></span>
                    </div>
                    <input type="checkbox" id="terms" name="terms" class="" id="agree" /> I have read and agree to the Terms and Conditions and Privacy Policy
                    <input type="submit" name="submit" value="" />
                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>

                            <button class="login100-form-btn" id="logbutton">
                                Register
                                <div class="spinner-border m-5" style="width: 3rem; height: 3rem;display:none" role="status" id="loader">
                                </div>
                            </button>

                        </div>
                    </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-md text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>


            </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        document.getElementById("logbutton").addEventListener("click", function() {
        document.getElementById("loader").style.display="block";
        });
    </script>

    <!-- Hero Section End -->
    <!-- end of banner -->


    <body>
        <!-- Js Plugins -->
        <script src="{{asset('assets/front/js/jquery-3.3.1.min.js')}}"></script>
        <script src="{{asset('assets/front/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/front/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('assets/front/js/main.js')}}"></script>
        <script src="{{asset('assets/front/js/jquery-3.3.1.min.js')}}"></script>
        <script src="{{asset('assets/front/js/jquery-migrate-3.0.1.min.js')}}"></script>
        <script src="{{asset('assets/front/js/booststrap.min.js')}}"></script>
        <script src="{{asset('assets/front/js/jquery.stellar.min.js')}}"></script>
        <script src="{{asset('assets/front/js/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('assets/front/js/jquery.animateNumber.min.js')}}"></script>
        <script src="{{asset('assets/front/js/aos.js')}}"></script>
        <script src="{{asset('assets/front/js/mainj.js')}}"></script>
        <script src="{{asset('assets/front/js/jquerry.min.js')}}"></script>
        <script src="{{asset('assets/front/js/slick.min.js')}}"></script>
        <script src="{{asset('assets/front/js/mainn.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        @livewireScripts
    </body>
</html>

</x-guest-layout>
