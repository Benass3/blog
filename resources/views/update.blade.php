<?php
?>

<a href="{{ url('showAll') }}">Zobrazit</a>
<a href="{{ url('addUserForm') }}">Pridat</a>

<form method="post" action="{{ action('UserController@updateAction', ["id" => $user->id]) }}">
    {{csrf_field()}}

    Meno:<br>
    <input type="text" name="meno" value="{{$user->meno}}">
    <br>
    Priezvisko:<br>
    <input type="text" name="priezvisko" value="{{$user->priezvisko}}">
    <br>
    Email:<br>
    <input type="email" name="email" value="{{$user->email}}">
    <br>
    Heslo:<br>
    <input type="password" name="heslo" value="{{$user->heslo}}">
    <br>
    Vek:<br>
    <input type="number" name="vek" value="{{$user->vek}}">
    <br><br>
    <input type="submit" value="Upravit" >
</form>