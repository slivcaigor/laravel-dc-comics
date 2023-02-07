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
            'firstName' => 'required|string|alpha|max:32',
            'lastName' => 'required|string|alpha|max:32',
            'dateOfBirth' => 'required|date|before_or_equal:today',
            'height' => 'nullable|integer|min:40|max:450',
        ]);
    
        $human = Human :: create($data);
    
        return redirect() -> route('human.home');
    }


    public function humanEdit(Human $human) {

        return view('pages.humanEdit', compact('human'));
    }


    public function humanUpdate(Request $request, Human $human) {

        $data = $request -> validate([
            'firstName' => 'required|string|alpha|max:32',
            'lastName' => 'required|string|alpha|max:32',
            'dateOfBirth' => 'required|date|before_or_equal:today',
            'height' => 'nullable|integer|min:40|max:450',
        ]);

        $human = $human -> update($data);

        return redirect() -> route('human.home');
    }
}