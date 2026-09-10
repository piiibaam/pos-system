<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Pages extends BaseController
{
    public function index(): string
    {
        return view('landing');
    }

    public function about(): string
    {
        return view('about');
    }
}