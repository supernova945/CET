<?php

namespace App\Controllers;

class Quienes_Somos extends BaseController
{
    public function index(): string
    {
        return view('Quienes_Somos');
    }
}