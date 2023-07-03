<?php

namespace App\Console\Commands;

use App\Events\CompleteApplicationEvent;
use App\Models\Application;
use Illuminate\Console\Command;

class GenerateExamNumber extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:examnumber';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

       $applications =  Application::where('passport_path', 'NILL')->get();

       foreach ($applications as $application)
       {
           event(new CompleteApplicationEvent($application));
       }

        return Command::SUCCESS;
    }
}
