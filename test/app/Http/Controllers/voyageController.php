<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Voyage;
use App\Models\Client;
use App\Models\Itineraire;
use Illuminate\Support\Facades\DB;

class voyageController extends Controller
{
    public function reservation()
    {
        return view('FormulaireTicket');
    }
    public function afficheMessage(Request $request){
        $villeDepart=$request->input('depart');
        $villeArrivee=$request->input('arrivee');
        $voyages = DB::table('voyages')
                ->join('itineraires', 'voyages.idItineraire', '=', 'itineraires.idItineraire')
                ->select('voyages.*', 'itineraires.VilleDepart', 'itineraires.VilleArrivee')
                ->when($villeDepart, function ($query, $villeDepart) {
                        return $query->where('itineraires.VilleDepart', '=',$villeDepart);
                    })
                ->when($villeArrivee, function ($query, $villeArrivee) {
                         return $query->where('itineraires.VilleArrivee', '=',$villeArrivee);
                    })
                ->get();
        return view('destination', compact('voyages','villeDepart','villeArrivee'));
    }
    public function afficheDestination(Request $request){
        $itineraires = Itineraire::select('VilleDepart', 'VilleArrivee')->distinct()->get();
        return view('ListeDestination', compact('itineraires'));
    }
    public function AjoutReservation()
    {
        $nom = request('nom');
        $prenom = request('prenom');
        $pieceIdentite = request('cin');
        $email = request('email');
        $telephone = request('tel');
        //ajouter les données dans la base de données
        $client = new Client();
        $client->nom = $nom;
        $client->prenom = $prenom;
        $client->pieceIdentite = $pieceIdentite;
        $client->email = $email;
        $client->telephone = $telephone;
        $client->save();
        return view('index');
    }
}

