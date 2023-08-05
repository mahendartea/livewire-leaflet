<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class InputGroup extends Component
{
    public $labelTitle;
    public $label;
    public $placeholder;
    public $type;

    public function render(): string
    {
        return <<<'blade'
          <div class="mb-6">
                <label for="{{$label}}" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                {{$labelTitle}}
                </label>
                <input type="{{$type}}" id="{{$label}}" class="bg-gray-50 border border-gray-300
                text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500
                block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
                dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="{{$placeholder}}" >
          </div>
        blade;
    }
}
