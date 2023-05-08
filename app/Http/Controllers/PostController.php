<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Disponibilite;
use App\Models\Membre;
use App\Models\Product;
use App\Models\Reservation;
use DateTime;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function home(){
        $contacts = Contact::orderBy('updated_at', 'DESC')->paginate(1);
        $disponibilites = Disponibilite::orderBy('id', 'DESC')->paginate(2);
        $abouts = About::orderBy('id', 'DESC')->paginate(1);
        $membres = Membre::orderBy('id', 'DESC')->paginate(4);

        $categories = Category::all();
        $products = Product::with('categories')->orderBy('created_at', 'DESC')->paginate(6);
        return view('template.index' , compact('products', 'categories', 'contacts',
         'disponibilites', 'abouts', 'membres'));
    }

    public function about(){
        $contacts = Contact::all();
        $disponibilites = Disponibilite::all();
        $abouts = About::orderBy('id', 'DESC')->paginate(1);
        $membres = Membre::orderBy('id', 'DESC')->paginate(4);

        return view('template.about', compact('contacts', 'disponibilites',
         'abouts', 'membres'));
    }


    public function contact(){
        $contacts = Contact::all();
        $disponibilites = Disponibilite::all();

        return view('template.contact', compact('contacts', 'disponibilites'));
    }

    public function reservation(){
        $contacts = Contact::all();
        $disponibilites = Disponibilite::all();

        return view('template.reservation', compact('contacts', 'disponibilites'));
    }

    public function reserv(Request $request)
    {

        // Validez les données du formulaire
        $validatedData = $request->validate([
            'nom' => 'required',
            'email' => 'required|email',
            'numero' => 'required',
            'date_heure' => 'required',
            'table' => 'required',
            'requete' => 'nullable',
            [
                'numero.digits' => 'Le champ "Numéro" doit contenir exactement :digits chiffres.',
            ]
        ]);


        // Formatez la date et l'heure selon le format ISO 8601
    $dateHeure = DateTime::createFromFormat('Y-m-d\TH:i', $validatedData['date_heure']);

        // Créez une nouvelle instance de la classe Reservation avec les données validées
        $reservation = new Reservation([
            'nom' => $validatedData['nom'],
            'email' => $validatedData['email'],
            'numero' => $validatedData['numero'],
            'date_heure' => $dateHeure->format('Y-m-d H:i:s'),
            'table' => $validatedData['table'],
            'requete' => $validatedData['requete'],
        ]);
        // dd($reservation['nom']);

        // Enregistrez la nouvelle instance dans la base de données
        $reservation->save();

        // Redirigez l'utilisateur vers une page de confirmation
        return back() ->with('success', 'Reservation soumise avec success');
    }

    public function team(){
        $contacts = Contact::all();
        $disponibilites = Disponibilite::all();

        return view('template.teams', compact('contacts', 'disponibilites'));
    }

    public function temoin(){
        $contacts = Contact::all();
        $disponibilites = Disponibilite::all();

        return view('template.temoignage', compact('contacts', 'disponibilites'));
    }

    public function main(){
        $contacts = Contact::all();
        $disponibilites = Disponibilite::all();

        return view('layouts.main', compact('contacts', 'disponibilites'));
    }

}
