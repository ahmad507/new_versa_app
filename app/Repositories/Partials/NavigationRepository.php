<?php

namespace App\Repositories\Partials;

use App\Models\Partial\Navigation;
use App\Services\Partials\NavigationInterface;


class NavigationRepository implements NavigationInterface
{
    /**++++++++++++++++++++++++++++++++++++++++++++++ */
    public function formatData($navigation)
    {
        return [
            '_nav' => $navigation->nav_name,
            '_url' => $navigation->nav_url,
            '_icon' => $navigation->nav_path
        ];
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++ */
    public function getDataNavigation()
    {
        $navigation = Navigation::orderBy('id', 'asc')
            ->get()
            ->map(function ($navigation) {
                return $this->formatData($navigation);
            });
        $newnavigation = json_decode($navigation);
        return $newnavigation;
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++ */
}
