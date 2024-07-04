<?php

namespace App\Exports;

use App\Models\Application;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExportSuccessfulCandidateInformation implements FromCollection, WithHeadings
{
    public array $examNumbers = [];

    public function __construct(array $examNumbers){
        $this->examNumbers = $examNumbers;
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        $data = [];
        $applications = Application::with(['school','center','state','parental_status','center'])->where('exam_number', $this->examNumbers)->get();
        foreach ($applications as $application){
            $data[] = [
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
