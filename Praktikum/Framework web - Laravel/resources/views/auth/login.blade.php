<x-guest-layout>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #1e3c72, #2a5298);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #fff;
            transition: background 0.4s, color 0.4s;
        }

        .card {
            background: #ffffff;
            color: #2a5298;
            text-align: center;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.2);
            max-width: 400px;
            width: 100%;
            animation: fadeIn 1.2s ease-in-out;
        }

        .card img {
            width: 80px;
            border-radius: 50%;
            margin-bottom: 15px;
            border: 3px solid #2a5298;
        }

        h1 {
            font-size: 22px;
            margin-bottom: 5px;
        }

        p {
            font-size: 14px;
            margin-bottom: 15px;
        }

        .form-group {
            text-align: left;
            margin-bottom: 15px;
        }

        .checkbox {
            display: flex;
            align-items: center;
            font-size: 13px;
            margin-bottom: 10px;
        }

        .checkbox input {
            margin-right: 8px;
        }

        .btn-login {
            width: 100%;
            padding: 10px;
            border: none;
            background: #2a5298;
            color: white;
            border-radius: 8px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn-login:hover {
            background: #1e3c72;
            transform: scale(1.05);
        }

        a {
            font-size: 13px;
            color: #2a5298;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>

    <div class="card">
        <img src="{{ asset('images/shorekeeper.png') }}" alt="Logo">
        <h1>{{ config('app.name') }}</h1>
        <p>Selamat datang kembali! Silakan login untuk melanjutkan.</p>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4 text-green-600" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email -->
            <div class="form-group">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full"
                              type="email" name="email"
                              :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-1 text-red-500 text-sm" />
            </div>

            <!-- Password -->
            <div class="form-group">
                <x-input-label for="password" :value="__('Password')" />
                <x-text-input id="password" class="block mt-1 w-full"
                              type="password"
                              name="password" required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-1 text-red-500 text-sm" />
            </div>

            <!-- Remember Me -->
            <div class="checkbox">
                <input id="remember_me" type="checkbox" name="remember">
                <label for="remember_me">{{ __('Ingat saya') }}</label>
            </div>

            <!-- Button -->
            <button type="submit" class="btn-login">
                {{ __('Login') }}
            </button>

            <div class="mt-3">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">{{ __('Lupa password?') }}</a>
                @endif
            </div>
        </form>
    </div>
</x-guest-layout>
