<?php

namespace App\Imports;

use App\Models\Application;
use App\Models\CandidateQualifiedInterview;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ImportSuccessfulCandidateForInterview implements ToCollection, WithHeadingRow
{
    public array $examNumbers = [];
    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {
        foreach ($collection as $row){

            $candidate = CandidateQualifiedInterview::where('exam_number', $row['exam_number'])->first();

            if(!$candidate){

                $app = Application::where('exam_number', $row['exam_number'])->first();

                if($app) {
                    $this->examNumbers[] = $row['exam_number'];
                    CandidateQualifiedInterview::updateOrCreate(
                        [
                            'exam_number' => $row['exam_number'],
                        ],
                        [
                            'exam_number' => $row['exam_number'],
                            'score' => $row['score'],
                            'application_id' => $app->id
                        ]);
                }
            }
        }
    }

}
