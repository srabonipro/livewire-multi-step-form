<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class StudentRegister extends Component
{
    use WithFileUploads;

    public $first_name, $last_name, $gender, $age, $description, $email, $phone, $country, $city, $frameworks = [], $cv, $terms;

    public function render()
    {
        return view('livewire.student-register');
    }
}
