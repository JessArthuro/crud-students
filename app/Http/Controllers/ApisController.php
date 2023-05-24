<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Http;

class ApisController extends Controller
{
    public function index():View
    {
        $users = Http::get('https://jsonplaceholder.typicode.com/users');
        $usersArray = $users->json(); //convertimos los datos que recibimos de la api en un array para poder recorrerlo.
        return view('api.index', ['users' => $usersArray]);
        // return view('api.index', compact('usuariosArray'));
    }
}
