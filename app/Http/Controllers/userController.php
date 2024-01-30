<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class userController extends Controller
{
    public function create()
    {
        return view('users.create');
    }
}