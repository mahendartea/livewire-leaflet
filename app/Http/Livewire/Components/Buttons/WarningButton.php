<?php

namespace App\Http\Livewire\Components\Buttons;

use Livewire\Component;

class WarningButton extends Component
{
    public $label;
    public $attributes;

    public function render(): string
    {
        return <<<'blade'
            <button type="button" class="focus:outline-none text-white bg-yellow-400
            hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium
            rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900"
            {{$attributes}}>{{$label}}</button>
        blade;
    }
}
