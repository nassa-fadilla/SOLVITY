<x-guest-layout>
    <x-auth-card>
    @include('includes.landing.stylesheet')

        <x-slot name="logo">
            <a href="/">
                <img class="w-20 h-20 rounded-full" src="{{ asset('/img/logo2.jpeg')}} " alt="Logo">
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" class=" text-white" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Kata Sandi')" class=" text-white"/> 
                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center" >
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-white">{{ __('Ingat Saya') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-white hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('lupa kata sandi Anda?') }}
                    </a>
                @endif

                

                <x-button class="login-btn ml-3 font-bold rounded-md my-3 py-3 px-4 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:bg-blue-500 hover:scale-105 duration-300 ease-in-out" style="color: black;">
                    {{ __('Login') }}
                </x-button>
            </div>
        </form>
        
    </x-auth-card>
</x-guest-layout>
