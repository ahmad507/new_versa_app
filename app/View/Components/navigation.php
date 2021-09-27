<?php

namespace App\View\Components;

use Illuminate\View\Component;

class navigation extends Component
{
    public $navMenu;
    public $trans;
    public $htls;
    public $vcn;
    public $trp;
    public $pymt;
    public function __construct($navMenu, $trans, $htls, $vcn, $trp, $pymt)
    {
        $this->navMenu = $navMenu;
        $this->trans = $trans;
        $this->htls = $htls;
        $this->vcn = $vcn;
        $this->trp = $trp;
        $this->pymt = $pymt;
    }
    public function render()
    {
        return view('components.navigation');
    }
}
