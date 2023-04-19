<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Spica Admin</title>
  <!-- base:css -->

  <link rel="stylesheet" href="{{ ('tempforage/vendors/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ ('tempforage/vendors/css/vendor.bundle.base.css') }}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ ('tempforage/css/style.css') }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ ('tempforage/images/favicon.png') }}" />
</head>

<x-auth-session-status class="mb-4" :status="session('status')" />

<body>
  <div class="container-scroller d-flex">
    <div class="container-fluid page-body-wrapper full-page-wrapper d-flex">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="{{('tempforage/images/logo.svg')}}" alt="logo">
              </div>
              <h4>Sén_Forage</h4>
              <h6 class="font-weight-light">Connectez-vous pour continuer.</h6>
              <form class="pt-3" method="POST"  action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"  class="form-control form-control-lg" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2 " style="color: red;" />
                </div>
                <div class="form-group">
                    <x-input-label for="password" :value="__('Password')" />
                    <x-text-input   id="password" class="block mt-1 w-full"
                                    type="password"
                                    name="password"
                                    class="form-control form-control-lg"
                                    required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
                <div class="mt-3">
                    <x-primary-button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">
                        {{ __('Log in') }}
                    </x-primary-button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                            <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                        </label>
                    </div>  
                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                        <!-- <x-primary-button class="ml-3">
                            {{ __('Log in') }}
                        </x-primary-button> -->
                    </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="{{('tempforage/vendors/js/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="{{('tempforage/js/off-canvas.js')}}"></script>
  <script src="{{('tempforage/js/hoverable-collapse.js')}}"></script>
  <script src="{{('tempforage/js/template.js')}}"></script>
  <!-- endinject -->
</body>

</html>

    