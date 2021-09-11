<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class StudentRegister extends Component
{
    use WithFileUploads;

    public $first_name, $last_name, $gender, $age, $description, $email, $phone, $country, $city, $frameworks = [], $cv, $terms;

    public $totalSteps = 4, $currentStep = 1;

    public function mount()
    {
        $this->currentStep = 1;
    }

    public function render()
    {
        return view('livewire.student-register');
    }

    public function increaseStep()
    {
        $this->currentStep++;
        if ($this->currentStep > $this->totalSteps) {
            $this->currentStep = $this->totalSteps;
        }
    }

    public function decreaseStep()
    {
        $this->currentStep--;
        if ($this->currentStep < 1) {
            $this->currentStep = 1;
        }
    }
}
