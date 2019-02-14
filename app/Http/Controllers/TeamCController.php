<?php

namespace CittaDashboard\Http\Controllers;

use Illuminate\Http\Request;
use CittaDashboard\Team;

class TeamCController extends Controller
{
    public function index()
    {
        return view('teamc')->with('teams', Team::all()->where('id', '3'));
    }
}
