<?php

namespace App\Console\Commands;

use App\Imports\DcssImport;
use Illuminate\Console\Command;
use Maatwebsite\Excel\Facades\Excel;


class ImportNewDCSSStudent extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:student';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import Student From excel';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        Excel::import(new DcssImport(), public_path('newdcss.xlsx'));

        return Command::SUCCESS;
    }
}
