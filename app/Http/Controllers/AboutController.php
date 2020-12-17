<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class AboutController extends Controller{
    public function index() {
        $dateOfBirth = '1999-09-27';
        $age = Carbon::parse($dateOfBirth)->age;
        $title = 'RS | ABOUT ME';
        return view('about', compact('title', 'age'));
    }
}
