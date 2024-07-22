<?php

namespace App\Imports;

use App\Models\Application;
use App\Models\CandidateQualifiedInterview;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ImportCandidateExamNumbersGetCandidateInformation implements ToCollection, WithHeadingRow
{
    public array $examNumbers = [];
    public array $scores = [];
    public array $notFound = [];

    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        foreach ($collection as $row){

            $app = Application::where('exam_number', strtoupper($row['exam_number']))->first();
            $candidate = CandidateQualifiedInterview::where('exam_number', strtoupper($row['exam_number']))->first();

            if($app) {
                $this->examNumbers[] = strtoupper($row['exam_number']);
                $this->scores[strtoupper($row['exam_number'])] =  $candidate?->score ?? 0;

            }else{
                $this->notFound[] = [
                    "Exam Numbers" => strtoupper($row['exam_number'])
                ];
            }
        }
    }
}
