<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class ClassEditController extends Controller
{
    public function index(){
        // 記得要放inertia
        return Inertia::render('ClassEdit');
       
    }
}
