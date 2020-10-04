<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Service\LicensePriceCalculator;

class License extends Component
{
    public $teamSize = 5;
/*
    public $amount;
    //Initialiser une fois et avant le render
    public function mount()
    {
        $this->amount = $this->calculateAmount($this->teamSize);
    }

    //Apres la mise à jour @attribute $teamSize et $amount
    public function updatedTeamSize($value)
    {
        $this->amount = $this->calculateAmount($value);
    }

    public function render()
    {
        return view('livewire.license');
    }
*/

    public function render()
    {
        return view('livewire.license', [
            'amount' => LicensePriceCalculator::calculatePrice($this->teamSize)
        ]);
    }

}
