<?php

namespace App\Http\Controllers;
use App\Models\Human;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home() {

        $humans = Human::orderBy('created_at', 'desc')->get();

        return view('pages.home', compact('humans'));

    }

    public function humanShow(Human $human) {
        
        return view('pages.humanShow', compact('human'));
    }
    
    public function humanDelete(Human $human) {

        $human -> delete();
    
        return redirect() -> route('human.home');
    }

    public function humanCreate() {

        return view('pages.humanCreate');
    }

    public function humanStore(Request $request) {

        $data = $request -> validate([
            'firstName' => 'required|string|max:32',
            'lastName' => 'required|string|max:32',
            'dateOfBirth' => 'date|before_or_equal:today',
            'height' => 'nullable|integer|min:0|max:300',
        ]);
    
        $human = new Human();
    
        $human -> firstName = $data['firstName'];
        $human -> lastName = $data['lastName'];
        $human -> dateOfBirth = $data['dateOfBirth'];
        $human -> height = $data['height'];
    
        $human -> save();
    
        return redirect() -> route('human.home');
    }
}