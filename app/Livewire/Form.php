<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Member;

class Form extends Component
{

    public $name;
    public $lastname;
    public $email;
    public $phone;
    public $birthdate;
    public $location;

    public function save()
    {

        Member::create(
            $this->only(['name', 'lastname', 'email', 'phone', 'location', 'birthdate'])
        );

        session()->flash('status', 'Post successfully created.');

        $this->dispatch('member-created');

        $this->reset();
    }

    public function render()
    {
        return view('livewire.form');
    }
}
