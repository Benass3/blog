<?php
?>
<form method="post" action="{{ action('UserController@insertAction') }}">
    {{csrf_field()}}

    <a href="{{ url('showAll') }}">Zobrazit</a>
    <a href="{{ url('addUserForm') }}">Pridat</a>

    Meno:<br>
    <input type="text" name="meno" value="Mickey">
    <br>

    Priezvisko:<br>
    <input type="text" name="priezvisko" value="Mouse">
    <br>

    Email:<br>
    <input type="email" name="email" value="@">
    <br>

    Heslo:<br>
    <input type="password" name="heslo">
    <br><br>

    Vek:<br>
    <input type="number" name="vek" value="23">
    <br><br>

    <input type="submit" value="Odoslat">
</form>