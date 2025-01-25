{{-- <x-guest-layout>
    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Reset Password') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link rel="icon" href="{{asset('img/logo.png')}}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.0/mapbox-gl-geocoder.min.js'></script>
    <link rel='stylesheet'
        href='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.0/mapbox-gl-geocoder.css'
        type='text/css' />

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.css' rel='stylesheet' />
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.js'></script>

    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Styles -->

    {{-- dasiuy ui  --}}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    @vite('resources/css/app.css')

    {{-- mapbox --}}

    <link href="https://api.mapbox.com/mapbox-gl-js/v2.11.0/mapbox-gl.css" rel="stylesheet">
    <script src="https://unpkg.com/@mapbox/mapbox-gl-language"></script>

    {{-- date picker --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    {{-- rich text editor --}}
    <link rel="stylesheet" href="/richtexteditor/rte_theme_default.css" />
    <script type="text/javascript" src="/richtexteditor/rte.js"></script>
    <script type="text/javascript" src='/richtexteditor/plugins/all_plugins.js'></script>

    {{-- AOS --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body class="h-screen bg-gray-100 flex items-center justify-center">
    <div class="w-full max-w-screen-xl p-4 md:p-6 2xl:p-10">
        <!-- Forms Section Start -->
        <div class="rounded-lg shadow-lg overflow-hidden bg-white">
            <div class="flex flex-wrap items-center">
                <div class="hidden w-full xl:block xl:w-1/2 form-container p-10 text-center bg-gradient-to-r from-blue-500 to-purple-500 text-white">
                    <a class="mb-5.5 inline-block" href="index.html">
                        <img class="hidden dark:block" src="{{asset('img/logo.png')}}" alt="Logo">
                        <img class="dark:hidden" src="src/images/logo/logo-dark.svg" alt="Logo">
                    </a>
                    <p class="text-xl font-medium 2xl:px-20">
                        Welcome to the Department of Public Safety
                    </p>
                </div>
                <div class="w-full xl:w-1/2 form-body p-6 sm:p-8 xl:p-10 border-l-2 border-gray-200">
                    <div class="text-center">
                        <span class="mb-1.5 block font-medium text-gray-700">Start for free</span>
                        <h2 class="mb-6 text-2xl font-bold text-black sm:text-title-xl2">
                            Reset Password
                        </h2>
                    </div>
                    <form method="POST" action="{{ route('password.store') }}" class="space-y-6">
                        @csrf

                        <input type="hidden" name="token" value="{{ $request->route('token') }}">

                        <div class="mb-4">
                            <label for="email" class="block mb-2.5 font-medium text-gray-700">Email</label>
                            <div class="relative">
                                <input id="email" class="w-full rounded-lg border border-gray-300 py-3 pl-6 pr-10 focus:ring focus:ring-primary focus:border-primary outline-none transition duration-150 ease-in-out" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username">
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="password" class="block mb-2.5 font-medium text-gray-700">Password</label>
                            <div class="relative">
                                <input id="password" class="w-full rounded-lg border border-gray-300 py-3 pl-6 pr-10 focus:ring focus:ring-primary focus:border-primary outline-none transition duration-150 ease-in-out" type="password" name="password" required autocomplete="new-password">
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="password_confirmation" class="block mb-2.5 font-medium text-gray-700">Confirm Password</label>
                            <div class="relative">
                                <input id="password_confirmation" class="w-full rounded-lg border border-gray-300 py-3 pl-6 pr-10 focus:ring focus:ring-primary focus:border-primary outline-none transition duration-150 ease-in-out" type="password" name="password_confirmation" required autocomplete="new-password">
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>
                        </div>

                        <div>
                            <button type="submit" class="w-full py-3 text-white bg-blue-600 rounded-lg hover:bg-blue-500 transition duration-150 ease-in-out">Reset Password</button>
                        </div>

                        <div class="mt-6 text-center">
                            <p class="font-medium text-gray-700">
                                Remembered your password?
                                <a href="{{ route('login') }}" class="text-blue-600 hover:underline">Sign In</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Forms Section End -->
    </div>
</body>

</html>
