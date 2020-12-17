<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $title = 'RS | CONTACT';
        return view('contact', compact('title'));
    }
}
