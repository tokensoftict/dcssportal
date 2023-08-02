<?php

namespace App\Console\Commands;

use App\Exports\ApplicantExport;
use App\Exports\ExportApplicantFromExcel;
use App\Imports\ImportCandidateFromExcelToExport;
use App\Models\Application;
use Illuminate\Console\Command;
use Maatwebsite\Excel\Facades\Excel;


class ExportCandidateDataFromExcel extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'export:candidate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Export Candidate';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        $excel_name = $this->ask('Please enter the name of the excel file to import from');

        $minimal = (bool)$this->ask('Minimal information or full information [1 for minimal, 0 for full]', 1);

        $import = new ImportCandidateFromExcelToExport();

        Excel::import($import, public_path($excel_name.'.xlsx'));

        Excel::store(new ExportApplicantFromExcel($import->exam_numbers, $minimal ),  'New_export'.time().'.xlsx');

        return Command::SUCCESS;
    }
}
