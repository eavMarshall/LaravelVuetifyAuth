<?php

namespace App\Http\Controllers;

use function view;

class SpaController extends Controller
{
    public function index()
    {
        return view('app\app');
    }
}
