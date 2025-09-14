<?php

namespace App\Http\Controllers;
// import User modlel
use Illuminate\Http\Request;
use App\Models\User;

abstract class Controller
{
    public function index()
    {
        $name = 'ayats';
        if (str_contains($name, 'ayat')) {
            echo 'yes';
        }

        // No return statement here
    }
}
