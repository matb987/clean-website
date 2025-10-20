<?php
namespace App\View\Components\Layouts;

use Illuminate\View\Component;

class Frontend extends Component
{
    public $title;

    public function __construct($title = null)
    {
        $this->title = $title;
    }

    public function render()
    {
        return view('components.layouts.frontend');
    }
}
