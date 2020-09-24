<?php

namespace App\Console\Commands;

use App\Jobs\QuotationMailJob;
use App\Model\Game;
use App\Model\Round;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Auth;

class CheckRound extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'quotation:start';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Checks Quotation Start Time';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $rounds=Round::where('quotation_open_time',now()->format('Y-m-d H:i'))->get();
        foreach ($rounds as $round){
            $participants=$round->game->participants()->get();
            dump($participants);
            QuotationMailJob::dispatch($participants,$round);
        }
        return 0;
    }
}
