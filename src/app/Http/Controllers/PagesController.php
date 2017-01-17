<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

class PagesController extends Controller
{
    function home() {
        $people = ['Tomek', 'Kuba', 'Andrzej'];
        $tasks = ['Add', 'Remove', 'Buy'];
        return view('pages.about', [
            'people' => $people,
            'tasks' => $tasks,
        ]);
    }

    function second() {
        $people = ['Piotr', 'Maciej', 'Angelika'];
        $tasks = ['Sell', 'Use', 'Update'];
        return view('pages.about', [
            'people' => $people,
            'tasks' => $tasks,
        ]);
    }
}
