<?php

namespace App\Imports;

use App\Events\CompleteApplicationEvent;
use App\Models\Application;
use App\Models\Center;
use App\Models\School;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\App;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ImportNewCandidateAndGenerateExamNumber implements ToCollection, WithHeadingRow
{

    public array $createdIDs,$examNumbers,$scores,$notFound = [];
    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {
        foreach ($collection as $row){
            $school = School::find($row['school_id']);
            $centre = Center::find($row['center_id']);
            if(!$school) dd($row['school_id']);

            $candidate =  Application::create([
                'exam_number' => NULL,
                'email' => '',
                'school_id' => $school->id,
                'user_id' => 1,
                'state_id' => $centre->state_id,
                'age' => 10,
                'address' => "Not Available",
                'firstname' => $row['firstname'],
                'center_id' => $centre->id,
                'dob' => now(),
                'telephone' => empty($row['phone']) ? NULL : $row['phone'],
                'gender' => "Male",
                'exam_state_id' => $centre->state_id,
                'othernames' => $row['othernames'],
                'surname' => $row['surname'],
                'passport_path' => NULL,
                'session_id' => 1,
                'parental_status_id'=>3,
                'school2_id' =>$school->id,
                'school_type_id' => $school->school_type_id,
                'school_type_id2' => $school->school_type_id,
            ]);

            event(new CompleteApplicationEvent($candidate));

            $examNumber = Application::find($candidate->id)->exam_number;
            if(!$examNumber){
                throw new \Exception("Unable to generate exam number");
            }
            $this->examNumbers[] = $examNumber;
            $this->scores[$examNumber] = (int)$row['score'];
            $this->createdIDs[] = $candidate->id;
        }
    }
}
