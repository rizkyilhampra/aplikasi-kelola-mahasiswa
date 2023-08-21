<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AuthLayout extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $authTitle = '',
        public string $title = '',
        public string $authSubtitle = '',
    ) {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('layouts.auth.auth');
    }
}
