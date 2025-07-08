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
    public array $scores = [];
    public array $notFound = [];
    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {
        foreach ($collection as $row){

            $candidate = CandidateQualifiedInterview::where('exam_number', strtoupper(trim($row['exam_number'])))->first();

            if(!$candidate) {

                $app = Application::where('exam_number', strtoupper(trim($row['exam_number'])))->first();

                if($app) {
                    $this->examNumbers[] = trim(strtoupper($row['exam_number']));
                    $this->scores[strtoupper($row['exam_number'])] =  $row['score'];
                    CandidateQualifiedInterview::updateOrCreate(
                        [
                            'exam_number' => strtoupper($row['exam_number']),
                        ],
                        [
                            'exam_number' =>strtoupper($row['exam_number']),
                            'score' => empty($row['score']) ? 0 : $row['score'],
                            'application_id' => $app->id
                        ]);
                }
            }else{
                $this->notFound[] = [
                    "Exam Numbers" => $row['exam_number']
                ];
            }
        }
    }

}
