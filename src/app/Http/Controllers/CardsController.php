<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Card;

class CardsController extends Controller
{
    public function index()
    {
        // $cards = DB::table('cards')->get();
        $cards = Card::all();

        return view('cards.index', [
            'cards' => $cards
        ]);
    }

    // public function show($id)
    // {
    //     $card = Card::find($id);
    //     return view('cards.show', [
    //         'card' => $card
    //     ]);
    // }

    public function show(Card $card)
    {
        $card->load('notes.user');
        $users = \App\User::all();
        // $card = Card::with('notes.user')->find(1);
        // return $card;

        // return $card;
        return view('cards.show', [
            'card' => $card,
            'users' => $users
        ]);
    }
}
