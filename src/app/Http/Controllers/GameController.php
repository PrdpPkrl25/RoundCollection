<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGameRequest;
use App\Model\Game;
use App\Model\Round;
use App\Repository\GameRepository;
use Carbon\Carbon;
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
        $games = Game ::where('user_id', Auth ::id()) -> get();
        return view('games.list_games', compact('games'));
    }

    /**
     * Show the form for creating a new resource.
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(Request $request)
    {
        $game = $request->session()->get('game');
        return view('games.create_game',compact('game'));
    }

    public function store(Request $request){
        if(empty($request->session()->get('game'))){
            $game = new Game();
            $game->fill($request->all());
            $request->session()->put('game', $game);
        }else{
            $game = $request->session()->get('game');
            $game->fill($request->all());
            $request->session()->put('game', $game);
        }
        return redirect()->route('games.numbers.add');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function addNumbers(Request $request){
        $game = $request->session()->get('game');
        return view('games.add_numbers',compact('game'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postAddNumbers(Request $request){
        $game = $request->session()->get('game');
        $game->fill($request->all());
        $request->session()->put('game', $game);
      return redirect()->route('games.days.add');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function addDays(Request $request){
        $game = $request->session()->get('game');
        return view('games.add_days',compact('game'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postAddDays(Request $request){
        $game = $request->session()->get('game');
        $game->fill($request->all());
        $request->session()->put('game', $game);
        return redirect()->route('games.datetime.add');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function addDateTime(Request $request){
        $game = $request->session()->get('game');
        return view('games.add_datetime',compact('game'));
    }

    /**
     * Store a newly created resource in storage.
     * @param StoreGameRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postDateTime(StoreGameRequest $request)
    {
        $game = $request->session()->get('game');
        $game->fill($request->all());
        $game = $this -> gameRepository -> handleCreate($game);
        $request->session()->forget('game');
        return redirect() -> route('participants.invite',$game->id);
    }

    /**
     * Display the specified resource.
     * @param  Game $game
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Game $game)
    {
        $previousRound=$game->rounds()->where('quotation_open_time','<',today())->orderBy('id','desc')->first();
        if(!$previousRound){
            $previousRound=$game->rounds()->where('quotation_open_time','>',today())->first();
        }
        return view('games.show_game', compact('game','previousRound'));
    }

    public function allRounds(Game $game)
    {
        return view('games.rounds.rounds_list', compact('game'));
    }

    public function info(Game $game)
    {
        return view('games.game_details', compact('game'));
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
