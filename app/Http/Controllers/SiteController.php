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

    public function send_email(Request $request)
    {
        $firstname = $request->input('firstname');
        $lastname  = $request->input('lastname');
        $email     = $request->input('email');
        $phone     = $request->input('phone');
        $message   = $request->input('message');
        $zip_code  = $request->input('zipcode');
        $become_retailer   = ($request->input('becomeRetailer') ? true : false);
        $roping_equipment  = ($request->input('ropingEquipment') ? true : false);
        $cattle_equipment  = ($request->input('cattleEquipment') ? true : false);
        $easy_now_products = ($request->input('easyNowProducts') ? true : false);

        return json_encode([
            'firstname' => $firstname,
            'lastname' => $lastname,
            'email' => $email,
            'phone' => $phone,
            'message' => $message,
            'zipcode' => $zip_code,
            'become_retailer' => $become_retailer,
            'roping_equipment' => $roping_equipment,
            'cattle_equipment' => $cattle_equipment,
            'easy_now_products' => $easy_now_products
        ]);
    }
}
