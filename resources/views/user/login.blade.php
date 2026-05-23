@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-100">
    
    <div class="w-full max-w-md bg-white shadow-xl rounded-2xl p-8">
        
        <!-- Title -->
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">
            Login Account
        </h2>

        <!-- Error Message -->
        @if ($errors->any())
            <div class="mb-4 bg-red-100 text-red-700 p-3 rounded-lg">
                {{ $errors->first() }}
            </div>
        @endif

        <!-- Form -->
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    Email
                </label>
                <input 
                    type="email" 
                    name="email" 
                    value="{{ old('email') }}"
                    required 
                    autofocus
                    class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none"
                    placeholder="Masukkan email"
                >
            </div>

            <!-- Password -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    Password
                </label>
                <input 
                    type="password" 
                    name="password" 
                    required
                    class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none"
                    placeholder="Masukkan password"
                >
            </div>

            <!-- Remember Me -->
            <div class="flex items-center justify-between mb-4">
                <label class="flex items-center text-sm text-gray-600">
                    <input type="checkbox" name="remember" class="mr-2">
                    Remember me
                </label>

                <a href="#" class="text-sm text-blue-500 hover:underline">
                    Lupa password?
                </a>
            </div>

            <!-- Button -->
            <button 
                type="submit"
                class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition duration-300"
            >
                Login
            </button>
        </form>

        <!-- Divider -->
        <div class="my-6 text-center text-gray-400 text-sm">
            atau
        </div>

        <!-- Social Login (Optional UI) -->
        <div class="flex gap-3">
            <button class="w-full border py-2 rounded-lg hover:bg-gray-50">
                Google
            </button>
            <button class="w-full border py-2 rounded-lg hover:bg-gray-50">
                GitHub
            </button>
        </div>

        <!-- Register -->
        <p class="text-sm text-center text-gray-600 mt-6">
            Belum punya akun?
            <a href="#" class="text-blue-600 font-medium hover:underline">
                Daftar
            </a>
        </p>

    </div>
</div>
@endsection