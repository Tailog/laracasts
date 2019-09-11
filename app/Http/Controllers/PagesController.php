<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Le nom de base pour un controller => nom_action_avec_s+Controller

class PagesController extends Controller
{
    //
    public function home(){
        // Donnez des paramètres à la view, plusieurs façon de le faire
        $coachs = [
            'Lucas',
            'Zak',
            'Sami'
        ];
        /*
    return view('welcome',compact('coachs'))
    */
        return view('welcome', [
            'coachs' => $coachs
        ]);
    }

    public function contact(){
        return view('contact');
    }

    public function about(){
        return view('about');
    }
}
