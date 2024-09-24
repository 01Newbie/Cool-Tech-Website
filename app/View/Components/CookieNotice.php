<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CookieNotice extends Component
{
    /**
     * Create a new instance of the CookieNotice component.
     */
    public function __construct()
    {
        
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|Closure|string The view for the component
     */
    public function render(): View|Closure|string
    {
        // Return the view that corresponds to this component
        return view('components.cookie-notice');
    }
}
