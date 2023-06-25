<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class TeacherGuestLayout extends Component
{
    /**
     * Get the view / contents that represents the component.teacher
     */
    public function render(): View
    {
        return view('teacherlayouts.guest');
    }
}