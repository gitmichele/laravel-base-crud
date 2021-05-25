<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Guest;

class GuestsController extends Controller
{
    public function all_guests() {

        $guests = Guest::all();

        return view('pages.all_guests', compact('guests'));
    }  

    public function this_guest($id) {

        $guest = Guest::findOrFail($id);

        return view('pages.this_guest', compact('guest'));
    }

    public function create() {

        return view('pages.new_guest');
    }
    public function store(Request $request) {

        $validate = $request -> validate([
            'name' => 'max:255',
            'lastname' => 'max:255',
            'date_of_birth' => 'date',
            'document_type' => 'max:1024',
            'document_number' => 'max:1024' 
        ]);

        $guest = Guest::create($validate);
        return redirect() -> route('this_guest', $guest -> id);
    }
}
