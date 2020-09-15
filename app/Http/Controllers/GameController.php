<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGameRequest;
use App\Model\Game;
use App\Repository\GameRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GameController extends Controller
{
    /**
     * @var GameRepository
     */
    private $gameRepository;

    /**
     * GameController constructor.
     * @param GameRepository $gameRepository
     */
    public function __construct(GameRepository $gameRepository)
    {
        $this -> gameRepository = $gameRepository;
    }

    /**
     * Display a listing of the resource.
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $games = Game ::where('owner_id', Auth ::id()) -> get();
        return view('games.list_games', compact('games'));
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('games.create_game');
    }

    /**
     * Store a newly created resource in storage.
     * @param StoreGameRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreGameRequest $request)
    {
        $game = $this -> gameRepository -> handleCreate($request);
        return redirect() -> route('players.create');
    }

    /**
     * Display the specified resource.
     * @param  Game $game
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Game $game)
    {
        return view('games.show_game', compact('game'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param  Game $game
     * @return \Illuminate\Http\Response
     */
    public function edit(Game $game)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * @param  \Illuminate\Http\Request $request
     * @param  Game $game
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Game $game)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param  Game $game
     * @return \Illuminate\Http\Response
     */
    public function destroy(Game $game)
    {
        //
    }
}
