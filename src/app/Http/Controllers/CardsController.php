<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Card;

class CardsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin', ['only' => ['show']]);
        // $this->middleware('auth', ['except' => ['index']]);
    }

    public function index()
    {
        // $cards = DB::table('cards')->get();
        $cards = Card::all();

        session()->flash('flash_message', "Smok Wawelski zrobi co trzeba!");
        // Session::put('status', "A to jest ten status!");
        // session()->flash('status', "A to jest ten status!");

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
