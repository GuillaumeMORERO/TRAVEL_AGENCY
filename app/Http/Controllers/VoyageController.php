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

    public function postVoyage(Request $request) {

        // manque verification de l'auth

        // vérification de la présence des champs obligatoires
        $validated = $request->validate([
            'departure_date' => 'required',
            'arrival_date' => 'required',
        ]);
        // création du nouveau voyage
        $voyage = new Voyage($request->all());
        $voyage->save();
        // retour de la vue
        $voyages = Voyage::all();
        return back()->with('voyages', $voyages);
    }

    public function delVoyage($id) {
        // manque vérification du auth, et présence effective du voyage
        $voyage = Voyage::find($id);
        if($voyage->etapes->isNotEmpty()){
            foreach ($voyage->etapes as $etape) {
                $etape->delete();
            }
        }
        $voyage->delete();

        // session()->flash('status', 'success');
        // session()->flash('title', 'Suppression');
        // session()->flash('message', "Le voyage a été supprimé");
        $voyages = Voyage::all();
        return back()->with('voyages', $voyages)->with('success','Product successfully added.');
    }

    public function addEtape(Request $request) {
        // vérification des champs obligatoires et des types
        $validated = $request->validate([
            'type' => 'required|string',
            'transport_number' => 'required|string',
            'departure' => 'required|string',
            'arrival' => 'required|string',
            'seat' => 'nullable|string',
            'gate' => 'nullable|string',
            'baggage_drop' => 'nullable|string',
            'arrival_date' => 'nullable|string',
        ]);
        $voyage = Voyage::find($request->voyageId);
        // ici il faudrait vérifier si le voyage existe 
        $order = $voyage->etapes->isEmpty() ? 1 : count($voyage->etapes) +1;
        $newEtape = new Etape([
            'voyage_id'        => $request->voyageId,
            'order'            => $order,
            'type'             => $request->type,
            'transport_number' => $request->transport_number,
            'departure'        => $request->departure,
            'arrival'          => $request->arrival,
            'seat'             => $request->seat,
            'gate'             => $request->gate,
            'baggage_drop'     => $request->baggage_drop,
            'departure_date'   => $request->departure_date,
            'arrival_date'     => $request->arrival_date,
        ]);
        $newEtape->save();

        $voyages = Voyage::all();
        return back()->with('voyages', $voyages);
    }

    public function deleteEtape(Request $request) {
        // il faudrait vérifier l'auth, les droits, et la présence du voyage en BDD
        $etape = Etape::find($request->etapeId);
        $etape->delete();
        $voyages = Voyage::all();
        return back()->with('voyages', $voyages);
    }
}
