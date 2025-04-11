<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class menudiv extends Component
{
    /**
     * Create a new component instance.
     */
    // public $title;
    public $items;
    // public $icon;


    public function __construct($items = [])
    {

        // // $this->title = $title;
        // // $this->icon = $icon;$title = 'Options', $icon = 'fas fa-bars',
        $this->items = $items;
    }
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.menudiv');
    }
}
