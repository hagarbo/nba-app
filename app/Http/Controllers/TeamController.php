<?php

namespace App\Http\Controllers;

use App\Team;
use App\Controllers\Controller;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Show a list of all available flights.
     *
     * @return Response
     */
    public function index()
    {
        $teams = Team::all();

        return view('Team.index', ['teams'=>$teams]);
    }

    /**
     * Show an existing team with a given name.
     *
     * @param  Request $request
     * @return Response
     */
    public function getByName(Request $request)
    {
        return = App\Team::findOrFail($request->Nombre);
    }

    /**
     * Create a new team instance.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        // Validate the request...
 
        $team = new Team;
 
        $team->Nombre = $request->Nombre;
        $team->Ciudad = $request->Ciudad;
        $team->Conferencia = $request->Conferencia;
        $team->Division = $request->Division;
        $team->Logo = $request->Logo;
 
        $team->save();
    }

    /**
     * Updates a team instance.
     *
     * @param  Request  $request
     * @return Response
     */
    public function edit(Team $team)
    {
        
    }
}
