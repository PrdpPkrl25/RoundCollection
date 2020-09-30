<?php

namespace App\Console\Commands;

use App\Jobs\QuotationMailJob;
use App\Jobs\SendNotificationJob;
use App\Model\Game;
use App\Model\Notification;
use App\Model\Round;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Auth;

class SendNotification extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notification:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send all received notification';

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
        $notifications=Notification::whereNull('send_at')->get();
        foreach ($notifications as $notification){
            SendNotificationJob::dispatch($notification);

        }

        return 0;
    }
}
