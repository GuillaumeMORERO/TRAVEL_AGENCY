<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Voyage;
use App\Models\Etape;

class VoyageController extends Controller
{
    public function getVoyages() {
        $voyages = Voyage::all();
        return view('vueVoyages')->with('voyages', $voyages);
    }
}
