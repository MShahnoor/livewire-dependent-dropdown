<?php

namespace App\Livewire;

use App\Models\Country;
use App\Models\State;
use Livewire\Component;

class DependentDropdown extends Component
{
    public $countries;
    public $states;
    public $selectedCountry = null;
    public $selectedState = null;

    public function mount()
    {
        $this->countries = Country::all();
    }

    public function updatedSelectedCountry($country)
    {
        $this->states = State::where('country_id', $country)->get();
    }

    public function render()
    {
        return view('livewire.dependent-dropdown');
    }
}
