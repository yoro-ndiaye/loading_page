<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- Email Address -->
                        <div class="mb-3">
                            <label for="email" class="form-label">{{ __('Email') }}</label>
                            <input id="email" type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" required autofocus autocomplete="username">
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Password -->
                        <div class="mb-3">
                            <label for="password" class="form-label">{{ __('Password') }}</label>
                            <input id="password" type="password" name="password" class="form-control @error('password') is-invalid @enderror" required autocomplete="current-password">
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Remember Me -->
                        <div class="mb-3 form-check">
                            <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                            <label class="form-check-label" for="remember_me">{{ __('Souvenir de moi!') }}</label>
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">{{ __('Connecter') }}</button>
                        </div>
                    </form>
                    <br>
                </div>

                <div class="card-footer text-center">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}">{{ __('Mot de passe oublié?') }}</a>
                    @endif
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
