<?php

namespace App\Http\Controllers;
use App\Models\Human;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home() {

        $humans = Human :: all();

        return view('pages.home', compact('humans'));

    }

    public function humanShow(Human $human) {
        
        return view('pages.humanShow', compact('human'));
    }
    
    public function humanDelete(Human $human) {

        $human -> delete();
    
        return redirect() -> route('human.home');
    }

}