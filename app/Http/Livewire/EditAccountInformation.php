<?php

namespace App\Http\Livewire;

use App\Models\User;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class EditAccountInformation extends Component
{

    use LivewireAlert;

    public String $firstname = "";
    public String $othernames = "";
    public String $email = "";
    public String $phone = "";
    public String $password = "";

    public User $user;

    protected function rules()
    {
        return [
            'firstname' => 'required',
            'othernames' => 'required',
            'email' => 'required|unique:users,email,'.$this->user->id,
            'phone' =>'required',
        ];
    }

    public function mount()
    {
        $this->firstname = $this->user->firstname;
        $this->othernames = $this->user->othernames;
        $this->email = $this->user->email;
        $this->phone = $this->user->phone;
    }

    public function render()
    {
        return view('livewire.edit-account-information');
    }


    public function updateAccount()
    {

        $this->validate();

        $message = "Account information has been updated successfully";

        $this->user->firstname = $this->firstname ;
        $this->user->othernames = $this->othernames ;
        //$this->user->email = $this->email ;
        $this->user->phone =  $this->phone ;
        if(!empty($this->password))
        {
            $this->user->password = bcrypt($this->password);

            $message = "Account information and password have been updated successfully";
        }

        $this->user->update();


        $this->alert(
            "success",
            "Application Information Update",
            [
                'position' => 'center',
                'timer' => 6000,
                'toast' => false,
                'text' =>  $message
            ]
        );

    }
}
