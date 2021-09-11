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
        $this->resetErrorBag();
        $this->validateData();
        $this->currentStep++;
        if ($this->currentStep > $this->totalSteps) {
            $this->currentStep = $this->totalSteps;
        }
    }

    public function decreaseStep()
    {
        $this->resetErrorBag();
        $this->currentStep--;
        if ($this->currentStep < 1) {
            $this->currentStep = 1;
        }
    }

    public function validateData()
    {
        if ($this->currentStep == 1) {
            $this->validate([
                'first_name' => 'required|string',
                'last_name' => 'required|string',
                'gender' => 'required',
                'age' => 'required|digits:2'
            ]);
        } elseif ($this->currentStep == 2) {
            $this->validate([
                'email' => 'required|email|unique:students,email',
                'phone' => 'required',
                'country' => 'required',
                'city' => 'required',
            ]);
        } elseif ($this->currentStep == 3) {
            $this->validate([
                'frameworks' => 'required|array|min:2|max:3'
            ]);
        }
    }

    public function register()
    {
        $this->resetErrorBag();
        if ($this->currentStep == 4) {
            $this->validate([
                'cv' => 'required|mimes:docx,pdf|max:1024',
                'terms' => 'accepted'
            ]);
        }
        dd('Now, you can submit form');
    }
}
