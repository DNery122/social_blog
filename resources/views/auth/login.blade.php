<link rel="stylesheet" href="{{ asset('css/login.css') }}">

<div class="content">
    <label class="title">Iniciar Sesión</label>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="row">
            <div class="cont-label">
                <label for="email">{{ __('Correo:') }}</label>
            </div>
            <input id="email" type="email" name="email" value="{{ old('email') }}" autocomplete="off" autofocus>
        </div>
        <div class="row">
            <div class="cont-label">
                <label for="password" class="label">{{ __('Contraseña:') }}</label>
            </div>
            <input id="password" type="password" name="password" autocomplete="off">
        </div>
        <button type="submit" hidden></button>
        <a class="register" href="{{route('register')}}">Registrarse</a>
    </form>
</div>
