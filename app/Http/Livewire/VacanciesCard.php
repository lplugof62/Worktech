<?php

namespace App\Http\Livewire;
use App\Models\Vacancy;

use Livewire\Component;

class VacanciesCard extends Component
{
    public function render()
    {
        return view('livewire.vacancies-card', [
            'vacancies' => Vacancy::latest()->get()
        ]);
    }
}
