<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class RomanCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'roman:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Cron for running commands description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        \Log::info("Cron is working fine!");

//        return Command::SUCCESS;
    }
}
