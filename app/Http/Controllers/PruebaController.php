<?php

namespace Cinema\Http\Controllers;

class PruebaController extends Controller
{
    public function index(){

    }

    public function getNombre($nombre = 'Daniel'){
        return $nombre;
    }
}