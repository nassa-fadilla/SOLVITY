<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <img class="w-20 h-20" src="{{ asset('img/logo2.jpeg')}}" alt="Logo">
            </a>
        </x-slot>

        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- NIK -->
            <div>
                <label for="nik" style="color:white;">NPM</label>
                <input id="nik" class="input-field" type="text" name="nik" value="{{ old('nik') }}" required autofocus>
            </div>

            <!-- Name -->
            <div class="mt-4">
                <label for="name" style="color:white;">Nama</label>
                <input id="name" class="input-field" type="text" name="name" value="{{ old('name') }}" required>
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <label for="email" style="color:white;">Email</label>
                <input id="email" class="input-field" type="email" name="email" value="{{ old('email') }}" required>
            </div>

            <!-- Phone -->
            <div class="mt-4">
                <label for="phone" style="color:white;">No. HP</label>
                <input id="phone" class="input-field" type="text" name="phone" value="{{ old('phone') }}" required>
            </div>

            <!-- Password -->
            <div class="mt-4">
                <label for="password" style="color:white;">Kata Sandi</label>
                <input id="password" class="input-field" type="password" name="password" required>
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <label for="password_confirmation" style="color:white;">Konfirmasi Sandi</label>
                <input id="password_confirmation" class="input-field" type="password" name="password_confirmation" required>
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="text-link" href="{{ route('login') }}" style="color:white;">
                    Sudah Punya Akun?
                </a>

                <button type="submit" class="custom-button">
                    Daftar
                </button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
