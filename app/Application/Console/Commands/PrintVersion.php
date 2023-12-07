<?php

namespace App\Application\Console\Commands;

use Illuminate\Console\Command;

class PrintVersion extends Command
{
    protected $signature = 'app:print-version';

    protected $description = 'Print current app version.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        echo 'v1.0.0 : ' . env('DB_HOST', 'NO DB HOST FOUND') . ' : ' . env('MY_DDD', 'NO DDD') . PHP_EOL;
    }
}
