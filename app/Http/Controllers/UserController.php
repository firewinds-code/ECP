<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Exception;

class UserController extends Controller
{
    public function show()
    {
        try {
            return view('dashboard');
            
             } catch (Exception $e) {
            return back()->with("error","Something Went Wrong");
        }
    }
}