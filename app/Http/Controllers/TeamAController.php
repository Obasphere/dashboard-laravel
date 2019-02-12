<?php

namespace CittaDashboard\Http\Controllers;

use Illuminate\Http\Request;
use CittaDashboard\Team;

class TeamAController extends Controller
{
    public function index()
    {
        return view('teamA.index')->with('teamA', Team::all());
    }
}
