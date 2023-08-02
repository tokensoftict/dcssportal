<?php

namespace App\Imports;

use App\Events\CompleteApplicationEvent;
use App\Models\Application;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class DcssImport implements ToModel, WithHeadingRow
{

    public function model(array $row)
    {

       $application =  Application::create([
           'surname' => strtoupper($this->getValue($row['surname'])),
           'firstname' => strtoupper($this->getValue($row['firstname'])),
           'othernames' => strtoupper($this->getValue($row['othernames'])) ?? NULL,
           'exam_number' => $this->getValue($row['exam_number']),
           'gender' => $this->getValue($row['gender']),
           'passport_path' => "NILL",
           'age' => $this->getValue($row['age']),
           'telephone' => $this->getValue($row['telephone']),
           'local_govt' => $this->getValue($row['local_govt']),
           'email' => $this->getValue($row['email']),
           'address' => $this->getValue($row['address']),
           'parental_status_id' => $this->getValue($row['parental_status_id']),
           'parent_names' => $this->getValue($row['parent_names']),
           'rank' => $this->getValue($row['rank']),
           'svc' => $this->getValue($row['svc']),
           'svc_number' => $this->getValue($row['svc_number']),
           'retired' => $this->getValue($row['retired']) ?? 0,
           'retired_number' => $this->getValue($row['retired_number']),
           'dob' => $this->getValue($row['dob']),
           'unitFormation' => $this->getValue($row['unitformation']),
           'state_id' => $this->getValue($row['state_id']),
           'school_id' => $this->getValue($row['school_id']),
           'school2_id' => $this->getValue($row['school2_id']),
           'school3_id' => $this->getValue($row['school3_id']),
           'school_type_id' => $this->getValue($row['school_type_id']),
           'school_type_id2' => $this->getValue($row['school_type_id2']),
           'exam_state_id' => $this->getValue($row['exam_state_id']),
           'center_id' => $this->getValue($row['center_id']),
           'num_of_edits'  => $this->getValue($row['num_of_edits']) ?? 0,
           'user_id'  => $this->getValue($row['user_id']),
           'session_id'  => $this->getValue($row['session_id']),
           'is_admin' => $this->getValue($row['is_admin']),
       ]);

       event(new CompleteApplicationEvent($application));

       return $application;
    }


    protected function getValue($value){
        if(empty($value)) return NULL;
        return $value;
    }

    public function headingRow(): int
    {
        return 1;
    }
}
