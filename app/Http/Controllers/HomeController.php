<?php

namespace App\Http\Controllers;


use App\Model\Game;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','change.password']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $games = Game ::where('user_id', Auth ::id()) -> get();
        $percentages=[];
        foreach ($games as $game){
            $timeSpan=Carbon::parse($game->end_date)->timestamp-Carbon::parse($game->start_date)->timestamp;
            $current=Carbon::now()->timestamp-Carbon::parse($game->start_date)->timestamp;
            $progress=$current/$timeSpan;
            $percentage=(1-$progress)*100;
            $percentages[]=$percentage;
        }
        return view('home',compact('games','percentages'));
    }
}
