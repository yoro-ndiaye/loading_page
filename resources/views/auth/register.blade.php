<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="stylehomepage.css">
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card log-container">
                <div class="card-header text-center">{{ __('Veullez saisir svp!') }}</div>

                <div class="d-flex justify-content-center p-3">
                <img src="assets/Logo Shape-white.png" width="30" height="30" class="d-inline-block align-top" alt="">
                <span>Boldo</span>
                </div>
                <div class="card-body">
                <form method="POST" action="{{ route('register') }}" class="mt-5">
    @csrf

    <!-- Name -->
    <div class="mb-3">
        <label for="name" class="form-label">{{ __('Name') }}</label>
        <input id="name" type="text" name="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" required autofocus autocomplete="name">
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>

    <!-- Email Address -->
    <div class="mb-3">
        <label for="email" class="form-label">{{ __('Email') }}</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" required autocomplete="username">
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>

    <!-- Password -->
    <div class="mb-3">
        <label for="password" class="form-label">{{ __('Password') }}</label>
        <input id="password" type="password" name="password" class="form-control @error('password') is-invalid @enderror" required autocomplete="new-password">
        <x-input-error :messages="$errors->get('password')" class="mt-2" />
    </div>

    <!-- Confirm Password -->
    <div class="mb-3">
        <label for="password_confirmation" class="form-label">{{ __('Confirm Password') }}</label>
        <input id="password_confirmation" type="password" name="password_confirmation" class="form-control" required autocomplete="new-password">
        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
    </div>

    <div class="btn items-align-right">
    <x-primary-button class="ms-4 btn-register">
            {{ __('Register') }}
        </x-primary-button>
    </div>
   
</form>

                <div class="card-footer text-center">
        <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
            {{ __('Already registered?') }}
        </a>

        
    </div>
                </div>
                <br>
            </div>
        </div>
    </div>
</div>

<!-- Ajouter le lien vers le fichier Bootstrap JS et Popper.js (si nécessaire) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
