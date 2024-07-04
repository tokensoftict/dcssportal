<?php

namespace App\Exports;

use App\Models\Application;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExportSuccessfulCandidateInformation implements FromCollection, WithHeadings
{
    public array $examNumbers = [];
    public array $examScores = [];

    public function __construct(array $examNumbers, array $examScores){
        $this->examNumbers = $examNumbers;
        $this->examScores = $examScores;
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        $data = [];
        $applications = Application::with(['school','center','state','parental_status','center'])->whereIn('exam_number', $this->examNumbers)->get();
        foreach ($applications as $application){
            $data[] = [
                'Exam Number' => $application->exam_number,
                'Score' => $this->examScores[$application->exam_number],
                'Surname' => $application->surname,
                'Firstname' => $application->firstname,
                'Othernames' => $application->othernames,
                'Age' => $application->age,
                'Phone Number' => $application->telephone,
                'Email Address' => $application->email,
                'Parental Status' => $application->parental_status->name,
                'School of Choice' => $application->school->name,
                'Center of Choice' => $application->center->name
            ];
        }

        return collect($data);
    }

    public function headings(): array
    {
        return  [
            'Surname',
            'Firstname',
            'Othernames',
            'Age',
            'Phone Number',
            'Email Address',
            'Parental Status',
            'School of Choice',
            'Center of Choice'
        ];
    }
}
