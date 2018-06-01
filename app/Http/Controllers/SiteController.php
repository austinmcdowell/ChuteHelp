<?php

namespace App\Http\Controllers;

use App\Page;
use App\Retailer;
use App\Location;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

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

    public function retailers()
    {
        $retailers = Retailer::get();
        return view('retailers', [
            'retailers' => $retailers
        ]);
    }

    public function retailer_search(Request $request)
    {
        $zip_code  = $request->query('zipCode');
        $distance  = $request->query('distance');
        $client    = new Client();
        $retailers = Retailer::get();

        if (!$zip_code) {
            return view('retailers', [
                'retailers' => $retailers,
                'form_message' => 'Please enter a valid zip code.'
            ]);
        }

        $res = $client->get("https://www.zipcodeapi.com/rest/OmOqRPEz212sqType3lCFTL839ZKoeCY1RpR19g0cSIjK3sC1yNrQlL0mfUj6pf4/radius.json/{$zip_code}/{$distance}/miles?minimal");
        
        if ($res->getStatusCode() !== 200) {
            return view('retailers', [
                'retailers' => $retailers,
                'error' => true
            ]);
        }

        $body = json_decode($res->getBody(), true);
        $zip_codes = $body['zip_codes'];
        $locations = Location::with('retailer')->whereIn('zip_code', $zip_codes)->get();

        if ($locations->isEmpty()) {
            return view('retailers', [
                'retailers' => $retailers,
                'no_results' => true
            ]);
        }

        return view('retailers', [
            'retailers' => $retailers,
            'locations' => $locations
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
