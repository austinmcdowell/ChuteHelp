<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;

use DateTime;

class AdminController extends Controller
{

    private function generate_filename($file)
    {
        $date = new DateTime;
        return $date->getTimestamp() . $file->getClientOriginalName();
    }

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
        $page_title = $request->input('title');

        $page = Page::where('title', $page_title)->firstOrNew([
            'title' => $page_title
        ]);

        $payload_data = json_decode($request->input('data'));
        $assets = $page->assets;
        
        if ($page_title === 'home') {
            if ($request->file('productFeatureImage1')) {
                $file = $request->file('productFeatureImage1');
                $file_name = self::generate_filename($file);
                $file->move(public_path('/storage'), $file_name);
                $assets['productFeatureImage1'] = '/storage/' . $file_name;
            }
    
            if ($request->file('productFeatureImage2')) {
                $file = $request->file('productFeatureImage2');
                $file_name = self::generate_filename($file);
                $file->move(public_path('/storage'), $file_name);
                $assets['productFeatureImage2'] = '/storage/' . $file_name;
            }
    
            if ($request->file('productFeatureImage3')) {
                $file = $request->file('productFeatureImage3');
                $file_name = self::generate_filename($file);
                $file->move(public_path('/storage'), $file_name);
                $assets['productFeatureImage3'] = '/storage/' . $file_name;
            }
        }
        
        $page->data = $payload_data;
        $page->assets = $assets;

        $page->save();

        return response()->json(['success' => true], 200);
    }
}
