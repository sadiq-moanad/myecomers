<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Leader;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    } 
    public function index()
    {
        $categories = Category::all();
        return view('home2', compact('categories'));
    }
}
