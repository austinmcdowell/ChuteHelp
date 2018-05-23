<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $page = Page::where('title', 'home')->first();
        return view('admin.index', [
            'page' => $page
        ]);
    }

    public function contact()
    {
        $page = Page::where('title', 'contact')->first();
        return view('admin.contact', [
            'page' => $page
        ]);
    }

    public function save(Request $request)
    {
        $page_title = $request->json('title');
        $payload_data = $request->json('data');

        $page = Page::where('title', $page_title)->firstOrNew([
            'title' => $page_title
        ]);
        $page->data = $payload_data;
        $page->save();

        return response()->json(['success' => true], 200);
    }
}
