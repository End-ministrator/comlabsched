<?php

namespace App\View\Components;

use Illuminate\View\Component;

class InputBox extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $type;
    public $label;

    public function __construct($type, $label)
    {
        dd ($type, $label);
        $this->type = $type;
        $this->label = $label;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input-box');
    }
}
