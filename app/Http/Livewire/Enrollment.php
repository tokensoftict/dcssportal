<?php

namespace App\Http\Livewire;


use App\Models\Application;
use App\Models\Center;
use App\Models\ParentalStatus;
use App\Models\School;
use App\Models\SchoolType;
use App\Models\Session;
use App\Models\State;
use App\Models\User;
use App\Models\UserActivity;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;

class Enrollment extends Component
{

    use WithFileUploads, LivewireAlert;

    public String    $surname = "";
    public String    $firstname = "";
    public String    $othernames = "";
    public String    $email = "";
    public String    $gender = "";
    public String     $age = "";
    public String    $dob = "";
    public String    $telephone = "";
    public String    $state_id = "";
    public String    $address = "";
    public String    $center_id = "";
    public String    $school_id= "";
    public String    $school2_id = "";
    public String    $parent_names = "";
    public String    $rank = "";
    public String    $svc = "";
    public String    $svc_number = "";
    public String    $unitFormation = "";
    public String   $select_retired = "";
    public String    $password = "";
    public String    $password_confirmation = "";
    public String    $retired_number = "";
    public String  $school_type_id2 = "";
    public String  $school_type_id = "";
    public String  $parental_status_id = "";
    public String   $exam_state_id = "";
    public int $user_id = 0;


    public Application $application;

    public $passport;

    public int $session_id = 0;

    public int $num_of_edits = 0;

    protected $messages = [
        'select_retired.required' => 'Please select retirement status',
        'school_type_id.required' => 'First Choice School Type Field is required',
        'school_id.required' => 'First Choice School Field is required',
        'school_type_id2.required' => 'Second Choice School Type Field is required',
        'school2_id.required' => 'Second Choice School Field is required',
        'exam_state_id.required' => 'Examination State is required',
        'center_id.required' => 'Examination Center is required',
        'state_id.required' => 'State of Origin field is required',
        'dob.required' => 'Date of Birth field is required',
    ];

    protected function rules()
    {
        $data =  [
            'firstname' => 'required',
            //'othernames' => 'required',
            'surname' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required|confirmed|min:6|max:32',
            'gender' => 'required',
            'passport' => 'required|mimes:jpg,jpeg|max:2048',
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

        if($this->parental_status_id === "1" || $this->parental_status_id === "2")
        {
            $data['parent_names'] =  'required';
            $data['rank'] = 'required';
            $data['svc'] = 'required';
            $data['svc_number'] = 'required';
            $data['unitFormation'] = 'required';
            $data['select_retired'] = 'required|in:Yes,No';
        }

        if($this->parental_status_id === "4")
        {
            $data['parent_names'] =  'required';
            $data['rank'] = 'required';
            $data['svc'] = 'required';
            $data['svc_number'] = 'required';
        }

        if($this->select_retired === "Yes")
        {
            $data['retired_number'] = 'required';
        }

        if(isset($this->application->id))
        {
            Arr::forget($data,['password','passport']);

            $data['email'] = 'required|unique:users,email,'.$this->application->user_id;
        }


        return $data;
    }

    public function mount()
    {
        $this->session_id = Session::where('status',1)->first()->id;

        if(isset($this->application->id))
        {
            // boostrap all public variable properties

            $properties =  [
                'firstname',
                'surname',
                'othernames',
                'email',
                //'password',
                'gender',
                //'passport_path',
                'age',
                'telephone',
                'local_govt',
                'address',
                'parental_status_id',
                'parent_names',
                'rank',
                'svc',
                'svc_number',
                //'retired',
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
            ];

            foreach ($properties as $property)
            {
                $this->{$property} = $this->application->{$property};

            }

            $this->retired = $this->application->retired == 'Yes' ? 1 : 0;

            $this->passport = url('/'.$this->application->passport_path);

        }

    }

    public function render()
    {
        return view('livewire.enrollment',[
            'centers' => Center::where('state_id',$this->exam_state_id)->get(),
            'states' => State::query()->get(),
            'schoolTypes' => SchoolType::all(),
            'parental_statuses' => ParentalStatus::all(),
            'filtered_school_type_1s' => School::where('school_type_id', $this->school_type_id)->get(),
            'filtered_school_type_2s' => School::where('school_type_id', $this->school_type_id2)->get(),
        ]);
    }


    public function processForm()
    {
        $this->dispatchBrowserEvent("scrollToTop", []);

        $this->validate();

        $this->password = bcrypt($this->password);

        $this->session_id = 1;

        return DB::transaction(function(){
            $user = User::create(
                [
                    'firstname' => $this->firstname,
                    'surname' => $this->surname,
                    'othernames' => $this->othernames,
                    'email' => $this->email,
                    'phone' => $this->telephone,
                    'password' => $this->password
                ]
            );
            UserActivity::logActivities([
                'user_id' => $user->id,
                'description' => 'Account for user has been created'
            ]);
            $this->user_id = $user->id;

            $file = $this->passport->store('passport', 'real_public');

             $application = Application::create(
                [
                    'firstname' => $this->firstname,
                    'surname' => $this->surname,
                    'othernames' => $this->othernames,
                    'email' => $this->email,
                    'password' => $this->password,
                    'gender' => $this->gender,
                    'passport_path' => $file,
                    'age' => $this->age,
                    'telephone' => $this->telephone,
                    'local_govt' => "",
                    'address' => $this->address,
                    'parental_status_id' => $this->parental_status_id,
                    'parent_names' => $this->parent_names,
                    'rank' => $this->rank,
                    'svc' => $this->svc,
                    'svc_number' => $this->svc_number,
                    'retired' => $this->select_retired == "Yes" ? 1 : 0,
                    'retired_number' => $this->retired_number,
                    'dob' => date("Y-m-d", strtotime($this->dob)),
                    'unitFormation' => $this->unitFormation,
                    'school_id' => $this->school_id,
                    'school2_id' => $this->school2_id,
                    'school3_id' => NULL,
                    'school_type_id' => $this->school_type_id,
                    'school_type_id2' => $this->school_type_id2,
                    'state_id' => $this->state_id,
                    'exam_state_id' => $this->exam_state_id,
                    'center_id' => $this->center_id,
                    'user_id' => $this->user_id,
                    'session_id' => $this->session_id,
                    'is_admin' => ((auth()->check() && auth()->user()->isAdmin()) ? 1 : 0)
                ]
            );

            UserActivity::logActivities([
                'user_id' => $user->id,
                'description' => 'Application / Enrollment of the User has been created'
            ]);

            event(new Registered($user));

            if (!(auth()->check() && auth()->user()->isAdmin())){
                auth()->login($user);
                UserActivity::logActivities([
                    'user_id' => $user->id,
                    'description' => 'User is automatically log in'
                ]);
            }

            return redirect()->route('account.make_payment', $application->id);
        });

    }

    public function updateApplication()
    {
        $this->dispatchBrowserEvent("scrollToTop", []);

        $this->validate();

        $data = [
            'firstname' => $this->firstname,
            'surname' => $this->surname,
            'othernames' => $this->othernames,
            'email' => $this->email,
            'password' => $this->password,
            'gender' => $this->gender,
            'age' => $this->age,
            'telephone' => $this->telephone,
            'local_govt' => "",
            'address' => $this->address,
            'parental_status_id' => $this->parental_status_id,
            'parent_names' => $this->parent_names,
            'rank' => $this->rank,
            'svc' => $this->svc,
            'svc_number' => $this->svc_number,
            'retired' => $this->select_retired == "Yes" ? 1 : 0,
            'retired_number' => $this->retired_number,
            'dob' => date("Y-m-d", strtotime($this->dob)),
            'unitFormation' => $this->unitFormation,
            'school_id' => $this->school_id,
            'school2_id' => $this->school2_id,
            'school_type_id' => $this->school_type_id,
            'school_type_id2' => $this->school_type_id2,
            'state_id' => $this->state_id,
            'exam_state_id' => $this->exam_state_id,
            'center_id' => $this->center_id,
        ];

        if(!is_string($this->passport)){
            $file = $this->passport->store('passport', 'real_public');
            $data['passport_path'] = $file;
        }

        $this->application->update($data);

        UserActivity::logActivities([
            'user_id' => $this->application->user_id,
            'description' => 'User edited / updated his application'
        ]);

        $this->alert(
            "success",
            "Application Update",
            [
                'position' => 'center',
                'timer' => 6000,
                'toast' => false,
                'text' =>  "Application has been updated successfully!.",
            ]
        );

    }

}
