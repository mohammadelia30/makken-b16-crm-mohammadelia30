<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class TimeDateLog extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:time-date-log';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
       $now = Carbon::now();
       $date = $now->format('y-m-d');
       Log::build([
        'driver' => 'single',
        'path' => storage_path("logs/$date.txt"),
       ])->info($now);
    }
}
