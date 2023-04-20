<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Reservation;
use DateTime;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function home(){
        $categories = Category::all();
        $products = Product::with('categories')->orderBy('created_at', 'DESC')->paginate(6);
        return view('template.index' , compact('products', 'categories'));
    }

    public function about(){
        return view('template.about');
    }


    public function contact(){
        return view('template.contact');
    }

    public function reservation(){
        return view('template.reservation');
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
        return view('template.teams');
    }

    public function temoin(){
        return view('template.temoignage');
    }

}
