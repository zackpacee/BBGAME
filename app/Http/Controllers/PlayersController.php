<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;

class PlayersController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

    }


    public function create()
    {
      // GET  /players/create
         return view('players.create');
    }


    public function store()
    {
        //  post  /player
    
        Player::create([request()->all(),auth()->id()]);
        
        return redirect('/');
    }


    public function show($id)
    {
        // GET /players/{id}
    }


    public function edit($id)
    {
        //  GET /players/{id}/edit
    }

  
    public function update(Request $request, $id)
    {
        // patch  /players/{id}
    }

    public function destroy($id)
    {
        // DELETE /players/{id}
    }
}
