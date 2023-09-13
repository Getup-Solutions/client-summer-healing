<?php

namespace App\Console\Commands;

use App\Models\Adminsubscription;
use App\Models\User;
use App\Models\Usersubscription;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class SubscriptionCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'subscription:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Checking user subscription ends on date';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        info("Cron Job running at ". now());
        $subscription = Usersubscription::where('next_date', '<=', Carbon::now()->timestamp)->update(['status' => 'inactive']);
        
    }
}
