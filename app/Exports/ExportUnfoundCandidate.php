<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExportUnfoundCandidate implements FromCollection, WithHeadings
{

    public array $unFound = [];

    public function __construct(array $unFound)
    {
        $this->unFound=$unFound;
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return collect($this->unFound);
    }

    public function headings(): array
    {
       return [
            "Exam Numbers Not Found",
             "Exam Numbers Duplicate"
       ];
    }
}
