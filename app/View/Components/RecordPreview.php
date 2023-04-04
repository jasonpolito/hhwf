<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class RecordPreview extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public $record,
        public $titleSize = 'xl',
        public $hideImage = false,
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.record-preview');
    }
}
