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
        $i = 0;
        foreach ($collection as $row){
            if(empty($row['exam_number'])) continue;
            $examNumber = $row['exam_number'];
            $examNumber = substr($examNumber, 2);
            $examNumber = substr($examNumber, 0, -2);
            $applicationID = (int)$examNumber;

            $application = Application::find($applicationID);
            if(!$application) {
                $this->notFound[$i] = [
                    "Exam Numbers Not Found" => $row['exam_number'],
                    "Exam Numbers Duplicate" => ""
                ];
                continue;
            }

            $candidate = CandidateQualifiedInterview::where('exam_number',  $application->exam_number)->first();

            if(!$candidate) {

                $app = Application::where('exam_number', $application->exam_number)->exists();

                if($app) {
                    $this->examNumbers[] =  $application->exam_number;
                    $this->scores[$application->exam_number] =  $row['score'];
                    CandidateQualifiedInterview::updateOrCreate(
                        [
                            'exam_number' => $application->exam_number,
                        ],
                        [
                            'exam_number' => $application->exam_number,
                            'score' => empty($row['score']) ? 0 : $row['score'],
                            'application_id' => $application->id
                        ]);
                } else {
                    $this->notFound[$i] = [
                        "Exam Numbers Not Found" => $row['exam_number'],
                        "Exam Numbers Duplicate" => ""
                    ];
                }
            } else {
                $this->notFound[$i] = [
                    "Exam Numbers Not Found" => "",
                    "Exam Numbers Duplicate" => $row['exam_number']
                ];
            }
            $i++;
        }
    }

}
