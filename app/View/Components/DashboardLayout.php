<?php

namespace App\View\Components;

use Illuminate\view\Component;
use Illuminate\view\view;

class DashboardLayout extends Component
{
    /**
     * Get the view/ contents that represents the component.
     */
    public function render():view
    {
        return view('layouts.dashboard');
    }
}