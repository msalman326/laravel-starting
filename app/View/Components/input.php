<?php

namespace App\View\Components;

use Illuminate\View\Component;

class input extends Component
{
    public $type;
    public $name;
    public $label;
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type, $label , $name)
    {
        $this->type = $type;
        $this->label = $label;
        $this->name = $name;
        


        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input');
    }
}
