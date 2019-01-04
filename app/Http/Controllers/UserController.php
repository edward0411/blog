<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
$users=[
'joel','miguel','pedro','samuel','daniel', '<script>alert("Clicker")</script>'

];

    $title =  'Listado de mis usuarios';

  // dd(compact('users', 'title'));

     return view('users', compact('users', 'title')) ;


    }
    public function show($id)
    {

        return "Mostrando detalle del usuario: {$id}";

    }
    public function create()
    {

        return 'Crear nuevo usuario';
    }
}
