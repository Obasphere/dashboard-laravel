<?php

namespace CittaDashboard\Http\Controllers;

use Illuminate\Http\Request;
use CittaDashboard\Team;

class TeamFController extends Controller
{
    public function index()
    {
        return view('teamf')
        ->with('teams', Team::all()->where('id', '6'))
        ->with('teama', Team::all()->where('id', '1'))
        ->with('teamb', Team::all()->where('id', '2'))
        ->with('teamc', Team::all()->where('id', '3'))
        ->with('teamd', Team::all()->where('id', '4'))
        ->with('teame', Team::all()->where('id', '5'))
        ->with('teamf', Team::all()->where('id', '6'));
    }
}
