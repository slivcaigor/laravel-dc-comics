<?php

namespace App\Http\Controllers;
use App\Models\Human;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home() {

        $humans = Human :: all();

        // $data = [
        //     'tasks' => $tasks
        // ];

        return view('pages.home', compact('humans'));
    }
}