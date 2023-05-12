<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Disponibilite;
use App\Models\Membre;
use App\Models\Product;
use App\Models\Reservation;
use Carbon\Carbon;
use DateInterval;
use DateTime;
use DateTimeZone;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function home(){
        $contacts = Contact::orderBy('updated_at', 'DESC')->paginate(1);
        $disponibilites = Disponibilite::orderBy('id', 'DESC')->paginate(2);
        $abouts = About::orderBy('id', 'DESC')->paginate(1);
        $membres = Membre::orderBy('id', 'DESC')->paginate(4);

        $categories = Category::all();
        $products = Product::inRandomOrder()->take(6)->get();
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
/*         $validatedData = $request->validate([
            'nom' => 'required',
            'email' => 'required|email',
            'numero' => 'required',
            'date_heure' => 'required|date_format:Y-m-d\TH:i:s',
            'table' => 'required',
            'requete' => 'nullable',
        ]); */

        // Validez les données du formulaire avec des règles supplémentaires
$validatedData = $request->validate([
    'nom' => 'required',
    'email' => 'required|email',
    'numero' => 'required',
    'date_heure' => [
        'required',
        'date_format:Y-m-d\TH:i',
        function ($attribute, $value, $fail) {
            $dateFormat = 'Y-m-d\TH:i';
            if (!DateTime::createFromFormat($dateFormat, $value)) {
                $fail("Le champ \"$attribute\" doit être au format $dateFormat.");
            }
            
            $reservationDateTime = new DateTime($value, new DateTimeZone('Africa/Porto-Novo')); // Utilise le fuseau horaire de Porto-Novo, Bénin
            // $reservationDateTime = new DateTime($value);

            // Convertir l'heure actuelle au fuseau horaire de Porto-Novo
            $now = new DateTime('now', new DateTimeZone('Africa/Porto-Novo'));

            // Vérifier si la date et l'heure sont déjà passées
            if ($reservationDateTime <= $now) {
                return back()->with('success', 'Choisissez une heure superieur a l\'heure actuelle ');
            }

            // Vérifier si la réservation est d'au moins 1 heure à l'avance
            $minAdvance = new DateInterval('PT1H'); // 1 heure d'avance
            $minimumDateTime = $now->add($minAdvance);
            if ($reservationDateTime <= $minimumDateTime) {
                $fail('La réservation doit être effectuée au moins 1 heure à l\'avance.');
            }

            
            
            // Vérifier si l'heure de réservation est inférieure à 10h du matin ou supérieure à 21h
            $hour = $reservationDateTime->format('H');
            if ($hour < 10 || $hour >= 21) {
                // $fail('Les réservations ne sont pas autorisées avant 10h du matin ou après 21h.');
                return back()->with('success', 'Veuillez SVP les heures pour les reservqtions doivent etre entre 10h de mat et 21h de soir');
            }
            
            // Vérifier si le nombre de réservations pour la même heure est supérieur à 5
            $reservationCount = Reservation::where('date_heure', $reservationDateTime->format('Y-m-d H:00:00'))->count();
            if ($reservationCount >= 5) {
                return back()->with('success', 'Actuellement le nombre de reservation est pleine');
            }
            
            // Vérifier si le délai minimum entre les réservations est respecté (30 minutes)
            $lastReservation = Reservation::orderBy('date_heure', 'desc')->first();
            if ($lastReservation) {
                $lastReservationDateTime = new DateTime($lastReservation->date_heure);
                $minDelay = 30; // Délai minimum en minutes
                $nextAllowedDateTime = $lastReservationDateTime->modify("+{$minDelay} minutes");
                if ($reservationDateTime <= $nextAllowedDateTime) {
                    $fail('Vous devez attendre un délai minimum de 30 minutes avant de soumettre une nouvelle réservation.');
                }
            }
        },
    ],
    'table' => 'required',
    'requete' => 'nullable',
    [
        'numero.digits' => 'Le champ "Numéro" doit contenir exactement :digits chiffres.',
    ]
]);

// ...


        // Créez une nouvelle instance de la classe Reservation avec les données validées
        $reservation = new Reservation([
            'nom' => $validatedData['nom'],
            'email' => $validatedData['email'],
            'numero' => $validatedData['numero'],
            'date_heure' => $validatedData['date_heure'],
            'table' => $validatedData['table'],
            'requete' => $validatedData['requete'],
        ]);

        // Enregistrez la nouvelle instance dans la base de données
        $reservation->save();

        // Redirigez l'utilisateur vers une page de confirmation
        return back()->with('success', 'Réservation soumise avec succès');
        
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
