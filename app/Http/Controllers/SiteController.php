<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page = Page::where('title', 'home')->first();
        return view('index', [
            'page' => $page
        ]);
    }

    public function contact()
    {
        $page = Page::where('title', 'contact')->first();
        return view('contact', [
            'page' => $page
        ]);
    }
}
