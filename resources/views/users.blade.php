<?php
?>

<a href="{{ url('showAll') }}">Zobrazit</a>
<a href="{{ url('addUserForm') }}">Pridat</a>

<table>
    @foreach($users as $user)
        <tr>
            <td>
                {{ $user->meno }}
            </td>
            <td>
                {{ $user->priezvisko }}
            </td>
            <td>
                {{ $user->email }}
            </td>
            <td>
                {{ $user->vek }}
            </td>
            <td>
                <a href="{{ action("UserController@showAction", ["id" => $user->id]) }}">editovat</a>
            </td>
            <td>
                <a href="{{ action("UserController@deleteAction", ["id" => $user->id]) }}">vymazat</a>
            </td>
        </tr>
    @endforeach
</table>