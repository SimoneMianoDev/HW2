@extends('layouts.logsign')

@section('head')
<script src="{{asset('js/signup.js')}}" defer></script>
<script type="text/javascript">
    const REGISTRAZIONE_ROUTE = "{{url('signup')}}";
</script>
<title>Registrazione</title>
@endsection

@section('corpo')
<form method="POST" autocomplete="off" action="{{ url('signup')}}">
    @csrf
    <h1>Benvenuto</h1>
    @if($error =='campi_vuoti')
    <section class='error'>Compilare tutti i campi.</section>
    @elseif($error =='utente_esistente')
    <section class='error'>Username già esistente.</section>
    @endif

    <div class="nome">
        <label for='nome'>Nome</label>
        <div class="container"><input type="nome" name="nome" required></div>
        <span>Nome non valido</span>
    </div>

    <div><input type='hidden' name='_token' value='{{csrf_token()}}'></div>

    <div class="cognome">
            <label for='cognome'>Cognome</label>
            <div class="container"><input type="cognome" name="cognome" required></div>
            <span>Cognome non valido</span>
    </div>

    <div class="username">
        <label for='username'>Username</label>
        <div class="container"><input type="username" name="username" required></div>
        <span>Username non valido</span>
    </div>

    <div class="email">
        <label for='email'>Email</label>
        <div class="container"><input type="email" name="email" required></div>
        <span>@error('email') {{ $message }} @enderror</span>
    </div>

    <div class="password">
            <label for='password'>Password</label>
            <div class="container"><input type="password" name="password" required></div>
            <span>Password non valida</span>
    </div>

    <div class='submit'>
        <input type="submit" id='log' class='button' value="Registrati">
    </div>

    <p>Hai già un account? <a href="{{url('login')}}">Accedi</a></p>
</form>
@endsection