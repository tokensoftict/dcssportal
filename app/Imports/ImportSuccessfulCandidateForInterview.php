<?php

namespace App\Imports;

use App\Models\Application;
use App\Models\CandidateQualifiedInterview;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ImportSuccessfulCandidateForInterview implements ToCollection, WithHeadingRow
{
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
                   CandidateQualifiedInterview::create([
                       'exam_number' => $row['exam_number'],
                       'application_id' => $app->id
                   ]);
               }
           }
        }
    }

}
