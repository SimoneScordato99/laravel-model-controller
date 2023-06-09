<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MovieDb as MovieDb;
use App\Http\Controllers\Guest\PageController as PageController;

class PageController extends Controller
{
    public function index(){
        $movie= MovieDb::All();
        return view('welcome', compact('movie'));
    }
}
