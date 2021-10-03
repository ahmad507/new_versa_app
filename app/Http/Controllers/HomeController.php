<?php

namespace App\Http\Controllers;

use App\Services\Partials\FooterInterface;
use App\Services\Partials\NavigationInterface;


class HomeController extends Controller
{
    /**++++++++++++++++++++++++++++++++++++++++++++++ */
    public $navigationInterface;
    public $footerInterface;
    /**++++++++++++++++++++++++++++++++++++++++++++++ */
    public function __construct(NavigationInterface $navigationInterface, FooterInterface $footerInterface)
    {
        $this->middleware('guest');
        $this->navigationInterface = $navigationInterface;
        $this->footerInterface = $footerInterface;
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++ */
    public function index()
    {
        $navigationMenu = $this->navigationInterface->getDataNavigation();
        $transportation = $this->footerInterface->transportation();
        $hotel = $this->footerInterface->hotel();
        $vacation = $this->footerInterface->vacation();
        $special_trip = $this->footerInterface->special_trip();
        $payment = $this->footerInterface->payment();
        return view('home', compact('navigationMenu','transportation','hotel','vacation','special_trip','payment'));
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++ */
}
