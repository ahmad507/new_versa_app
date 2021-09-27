<?php

namespace App\Services\Partials;


interface FooterInterface
{
    /**++++++++++++++++++++++++++++++++++++++++++++++ */
    public function formatDataProduct($productItems);

    /**++++++++++++++++++++++++++++++++++++++++++++++ */
    public function transportation();

    /**++++++++++++++++++++++++++++++++++++++++++++++ */
    public function hotel();

    /**++++++++++++++++++++++++++++++++++++++++++++++ */
    public function vacation();

    /**++++++++++++++++++++++++++++++++++++++++++++++ */
    public function special_trip();

    /**++++++++++++++++++++++++++++++++++++++++++++++ */
    public function payment();
}
