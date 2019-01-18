<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;

class SessionsController extends Controller
{
    public function create(){
    	return view('users.create');
    }
}
