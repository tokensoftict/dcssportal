<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
{

    public static $accountFields = [
        'firstname' ,
        'surname' ,
        'othernames',
        'email',
        'phone',
        'password',
    ];

    public static $fields = [
        'firstname' ,
        'surname' ,
        'othernames',
        'email',
        'phone',
        'password',
        'gender',
        'passport',
        'age',
        'telephone',
        'local_govt',
        'address',
        'parental_status_id',
        'parent_names',
        'rank',
        'svc',
        'svc_number',
        'retired',
        'retired_number',
        'dob',
        'unitFormation',
        'school_id',
        'school2_id',
        'school3_id',
        'school_type_id',
        'school_type_id2',
        'state_id',
        'exam_state_id',
        'center_id',
        'user_id',
        'session_id'
    ];
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $data =  [
            'firstname' => 'required',
            'othernames' => 'required',
            'surname' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required|confirmed|min:6|max:32',
            'gender' => 'required',
            'passport' => 'required|mimes:png,jpg,jpeg|max:2048',
            'age' => 'required|numeric',
            'telephone' =>'required',
            'address' => 'required',
            'dob' => 'required',
            'parental_status_id' => 'required',
            'state_id' => 'required',
            'exam_state_id' => 'required',
            'center_id' => 'required',
            'school_id' => 'required',
            'school2_id' => 'required',
            'school_type_id' => 'required',
            'school_type_id2' => 'required',
        ];

        if($this->get('parental_status_id') === "1" || $this->get('parental_status_id') === "2")
        {
            $data['parent_names'] =  'required';
            $data['rank'] = 'required';
            $data['svc'] = 'required';
            $data['svc_number'] = 'required';
            $data['unitFormation'] = 'required';
            $data['select_retired'] = 'required|in:Yes,No';
        }

        if($this->get('parental_status_id') === "4")
        {
            $data['parent_names'] =  'required';
            $data['rank'] = 'required';
            $data['svc'] = 'required';
            $data['svc_number'] = 'required';
        }


        return $data;
    }
}
