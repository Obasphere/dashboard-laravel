<?php

namespace CittaDashboard\Http\Controllers;

use Illuminate\Http\Request;
use CittaDashboard\Team;

class TeamAController extends Controller
{
    public function index()
    {
        return view('teama')->with('teams', Team::all());
    }
}
