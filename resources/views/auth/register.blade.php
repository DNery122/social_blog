<link rel="stylesheet" href="{{ asset('css/register.css') }}">

<div class="content">
    <label class="title">Registrate</label>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="row">
            <div class="cont-label">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>
            </div>
            <input id="name" type="text" name="name" value="{{ old('name') }}" required autocomplete="off"
                autofocus>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="row">
            <div class="cont-label">
                <label for="email">{{ __('Correo') }}</label>
            </div>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="off">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="row">
            <div class="cont-label">
                <label for="password">{{ __('Contraseña') }}</label>
            </div>
            <input id="password" type="password" name="password" required autocomplete="off">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="row">
            <div class="cont-label">
                <label for="password-confirm">{{ __('Confirmar') }}</label>
            </div>
            <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="off">
        </div>
        <button type="submit" hidden></button>
        <p>
            <button class="button1" onclick="javascript: history.go(-1)">REGRESA</button>
        </p>
    </form>
</div>
