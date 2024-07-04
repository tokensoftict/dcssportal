<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class MultiSheetExportCandidate implements WithMultipleSheets
{

    public array $examNumbers = [];
    public array $examScores = [];

    public array $unFound = [];


    public function __construct(array $examNumbers, array $examScores, array $unFound){
        $this->unFound = $unFound;
        $this->examScores = $examScores;
        $this->examNumbers = $examNumbers;
    }

    public function sheets(): array
    {
        return [
            "Successful Candidates" => new ExportSuccessfulCandidateInformation($this->examNumbers, $this->examScores),
            "Un-found Candidates" =>new ExportUnfoundCandidate($this->unFound)
        ];
    }
}
