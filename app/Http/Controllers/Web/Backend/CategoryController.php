<?php

namespace App\Http\Controllers\Web\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {

        return view('backend.layout.category.index');
    }

    public function create()
    {

        return view('backend.layout.category.create');
    }
}
