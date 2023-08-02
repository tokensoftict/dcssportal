<?php

namespace App\Imports;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ImportCandidateFromExcelToExport implements  ToModel, WithHeadingRow
{
    public array $exam_numbers;

    public function model(array $row)
    {
       //export_info
       $this->exam_numbers[] = $row['exam_number'];
    }

    public function headingRow(): int
    {
        return 1;
    }
}
