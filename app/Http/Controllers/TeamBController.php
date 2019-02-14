<?php

namespace CittaDashboard\Http\Controllers;

use Illuminate\Http\Request;
use CittaDashboard\Team;

class TeamBController extends Controller
{
    public function index()
    {
        return view('teamb')
        ->with('teams', Team::all()->where('id', '2'))
        ->with('teama', Team::all()->where('id', '1'))
        ->with('teamb', Team::all()->where('id', '2'))
        ->with('teamc', Team::all()->where('id', '3'));
    }
}
