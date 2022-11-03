<?php

namespace App\Http\Controllers;

use App\Models\Spot;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $sensoron = Spot::where('status', '1')->count();
        $sensoroff = Spot::where('status', '0')->count();
        $totalsensor = Spot::All()->count();

        return view('dashboard', [
            "title" => "Home",
            'active' => " home",
            'sensoron' => $sensoron,
            'sensoroff' => $sensoroff,
            'totalsensor' => $totalsensor
        ]);
    }
}
