<?php

namespace App\Http\Controllers;

use App\Retailer;
use App\Location;

use DateTime;
use Illuminate\Http\Request;

class RetailerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $retailers = Retailer::get();
        return view('admin.retailers.index', [
            'retailers' => $retailers
        ]);
    }

    public function add()
    {
        return view('admin.retailers.add');
    }

    public function edit($id)
    {
        $retailer = Retailer::with('locations')->find($id);
        return view('admin.retailers.edit', [
            'retailer' => $retailer
        ]);
    }

    public function save(Request $request)
    {
        $id = $request->input('id');

        $retailer = Retailer::findOrNew($id);

        $locations = $request->input('locations');

        if ($locations) {
            $locations = json_decode($locations, true);
        }

        $retailer->name = $request->input('name');
        $retailer->website = $request->input('website');

        if ($request->file('logo')) {
            $file = $request->file('logo');
            $date = new DateTime;
            $file_name = $date->getTimestamp() . ' ' . $file->getClientOriginalName();
            $file->move(public_path('/storage/retailers'), $file_name);
            $retailer->logo_url = '/storage/retailers/' . $file_name;
        }

        $retailer->save();
    
        if ($locations) {
            foreach ($locations as $location_data) {
                $location;
                if (array_key_exists('id', $location_data)) {
                    $location = Location::find($location_data['id']);
                } else {
                    $location = new Location;
                }

                $location->retailer_id = $retailer->id;
                $location->address = $location_data['address'];
                $location->city = $location_data['city'];
                $location->state = $location_data['state'];
                $location->zip_code = $location_data['zip_code'];
                $location->phone = $location_data['phone'];

                $location->save();
            }
        }

        return response()->json(['success' => true], 200);
    }

    public function delete_location(Request $request)
    {
        $location_id = $request->json('id');
        $location = Location::findOrFail($location_id);
        $location->delete();
        return response()->json(['success' => true], 200);
    }

    public function delete($id)
    {
        $retailer = Retailer::findOrFail($id);
        $retailer->delete();
        return redirect('/admin/retailers');
    }
}
