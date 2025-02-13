<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterIndexController extends Controller
{
    Public function __invoke()
    {
        return inertia()->modal('Auth/Register')->baseRoute('home');
    }
}
