<?php

namespace Chifoidriss\Notifer;

use Illuminate\View\Component;

class NotiferComponent extends Component
{
    public function render()
    {
        return view('notifer::components.notifer');
    }
}
