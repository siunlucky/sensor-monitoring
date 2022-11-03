<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Spot;
use App\Models\Place;
use Illuminate\Http\Request;

class SmartSwitchController extends Controller
{
    // public function search()
    // {
    //     return view('smart-switch', [
    //         'active' => ' dashboard',
    //         'places' => Place::all(),
    //         'areas' => Area::all(),
    //         'spots' => Spot::all()
    //     ]);
    // }

    public function index(Request $request)
    {
        $name = $request->name;

        if ($name) {
            $place = Place::where('name', 'like', "%" . $name . "%")->get();
        } else {
            $place = Place::All();
        }


        return view('smart-switch', [
            'active' => ' dashboard',
            'places' => $place,
            'areas' => Area::all(),
            'spots' => Spot::all()
        ]);
    }
}
