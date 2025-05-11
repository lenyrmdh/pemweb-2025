<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Employee;

class ShowProfile extends Component
{
    public function render()
    {
        $employees = Employee::all();

        return view('livewire.show-profile', compact('employees'));
    }
}
