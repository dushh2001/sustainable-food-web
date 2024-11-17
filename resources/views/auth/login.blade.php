<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register page</title>
    <link rel="stylesheet" href="{{ asset('/register.css') }}"> 
</head>
<body>
    <!-- Navbar -->
    <header>
        <nav class="navbar">
            <div class="logo">Eco - Mart</div>
            <ul class="nav-links">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="#">Our Story</a></li>
                <li><a href="#">Our Products</a></li>
                <li><a href="#">Sustainability</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
            <div class="navbar-buttons">
                <a href="#" class="cart-btn">🛒</a>
                @if (Route::has('login'))
               
                    @auth
                        <a
                            href="{{ url('/dashboard') }}"
                            
                        >
                            Dashboard
                        </a>
                    @else
                        <a
                            href="{{ route('login') }}"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                        >
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a
                                href="{{ route('register') }}"
                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                            >
                                Register
                            </a>
                        @endif
                    @endauth
               
            @endif
            </div>
        </nav>
    </header>


<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block w-full mt-1"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="text-indigo-600 border-gray-300 rounded shadow-sm focus:ring-indigo-500" name="remember">
                <span class="text-sm text-gray-600 ms-2">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="text-sm text-gray-600 underline rounded-md hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

<footer class="footer">
    <div class="footer-content">
        <!-- Company Info -->
        <div class="footer-section company-info">
            <h2 class="company-logo">Eco - Mart</h2>
            <p>Contact</p>
            <p>E-Mail: ecomart@gmail.com</p>
            <p>Hotline: +94 11 123 4567</p>
        </div>

        <!-- Navigation Links -->
        <div class="footer-section links">
            <p>Home</p>
            <p>Our Story</p>
            <p>Our Products</p>
            <p>Sustainability</p>
            <p>Contact Us</p>
        </div>

        <!-- Account Links -->
        <div class="footer-section account">
            <p>Sign in</p>
            <p>View Cart</p>
            <p>Track my Order</p>
            <p>Help</p>
            <p>Responsibilities</p>
        </div>

        <!-- Social Media Links -->
        <div class="footer-section social-media">
            <p>Connect with us</p>
            <div class="social-icons">
                <img src="images/download (1).png" alt="Facebook">
                <img src="images/download (3).jpeg" alt="Instagram">
                <img src="images/twitter.png" alt="Twitter">
                <img src="images/download (2).jpeg" alt="WhatsApp">
            </div>
        </div>
    </div>
</footer>
