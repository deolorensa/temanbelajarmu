<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PelajaranController extends Controller
{
    public function index()
    {
        return view('class');
    }
}
