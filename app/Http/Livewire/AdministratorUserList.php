<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class AdministratorUserList extends Component
{

    public $users;

    public $userType = [
        '1' => 'Administrator',
        '2' => 'DCSS Administrator',
        '3' => 'Upperlink Administrator'
    ];

    public function mount()
    {
        $this->users = User::whereIn('is_admin',[1,2,3])->get();
    }

    public function render()
    {
        return view('livewire.administrator-user-list');
    }
}
