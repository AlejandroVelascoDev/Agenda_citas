<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {

        $total_usuarios = \App\Models\User::count();
        return view('admin.index', compact('total_usuarios'));
    }
}
