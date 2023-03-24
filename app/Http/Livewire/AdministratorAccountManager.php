<?php

namespace App\Http\Livewire;

use App\Models\User;
use Carbon\Carbon;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class AdministratorAccountManager extends Component
{

    use LivewireAlert;

    public String $firstname = "";
    public String $othernames = "";
    public String $email = "";
    public String $phone = "";
    public String $password = "";
    public String $is_admin = "";

    public $title = "New Administrator Form";

    public User $user;


    protected function rules()
    {
        return [
            'firstname' => 'required',
            'othernames' => 'required',
            'email' => 'required|unique:users,email,'.$this->user->id,
            'phone' =>'required',
            'is_admin' => 'required',
        ];
    }

    public function mount()
    {
        if(isset($this->user->id))
        {
            $this->firstname = $this->user->firstname;
            $this->othernames = $this->user->othernames;
            $this->email = $this->user->email;
            $this->phone = $this->user->phone;
            $this->is_admin = $this->user->is_admin;

            $this->title = "Update Administrator";
        }

    }

    public function render()
    {
        return view('livewire.administrator-account-manager');
    }

    public function saveUser()
    {
        $this->validate();

        if(isset($this->user->id))
        {
            $this->user->update(
              [
                  'firstname' => $this->firstname,
                  'othernames' => $this->othernames,
                  'email' => $this->email,
                  'phone' =>$this->phone,
                  'is_admin' => $this->is_admin
              ]
            );

            $message = "User has been updated successfully";

        }
        else {

            $this->user = User::create(
                [
                    'firstname' => $this->firstname,
                    'othernames' => $this->othernames,
                    'email' => $this->email,
                    'password' => bcrypt('dcssadmin'),
                    'phone' =>$this->phone,
                    'email_verified_at' => Carbon::now()->toDateTimeLocalString(),
                    'is_admin' => $this->is_admin
                ]
            );

            $message = "User has been added successfully";
        }

        $this->alert(
            "success",
            "Admnistrator",
            [
                'position' => 'center',
                'timer' => 3000,
                'toast' => false,
                'text' =>  $message
            ]
        );


    }





}
