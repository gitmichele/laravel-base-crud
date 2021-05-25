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
}
