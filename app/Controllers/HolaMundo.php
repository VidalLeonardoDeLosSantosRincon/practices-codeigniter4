<?php namespace App\Controllers;

class HolaMundo extends BaseController
{
    public function index()
    {
        return view("hola_mundo");
    }
}