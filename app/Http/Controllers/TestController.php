<?php


namespace App\Http\Controllers;


class TestController extends Controller
{
    public function testAction() {
        $premenna = "Cviko ";

        for ($i =0; $i <5; $i++) {
            echo $premenna . $i . "<br>";
        }
    }
}