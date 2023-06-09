<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movies as Movies;
// use App\Http\Controllers\Guest\PageController as PageController;

class PageController extends Controller
{
    public function index(){
        $movies= Movies::All();
        return view('pages.main', compact('movies'));
    }
}
