<?php

namespace App\Http\Controllers;

use App\Vestige;
use App\Http\Controllers\Controller;



class HomeController extends Controller {
    public function home() {
        $vestiges = Vestige::inRandomOrder()->take(8)->get();
        // dd($vestiges);
        // Collection {#1129 ▼
        //     #items: array:8 [▶]
        //   }
    

        return view('home', [
            'vestiges' => $vestiges
        ]);
    }

    public function contact() {
        return view('contact');
    }

    // j'ai mis en commentaire site et vestige ci-dessous car j'ai créé SiteController.php

    // public function site() {
    //     return view('site');
    // }

    // public function vestige() {
    //     return view('vestige');
    // }

    public function reservation() {
        return view('reservation');
    }

    public function checkout() {
        return view('checkout');
    }

    public function success() {
        return view('success');
    }

    public function visites() {
        return view('visites');
    }
}