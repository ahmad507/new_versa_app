<?php

namespace App\View\Components;

use Illuminate\View\Component;

class footer extends Component
{
    public $trans;
    public $htls;
    public $vcn;
    public $trp;
    public $pymt;

    public function __construct($trans, $htls, $vcn, $trp, $pymt)
    {
        $this->trans = $trans;
        $this->htls = $htls;
        $this->vcn = $vcn;
        $this->trp = $trp;
        $this->pymt = $pymt;
    }


    public function render()
    {
        return view('components.footer');
    }
}
