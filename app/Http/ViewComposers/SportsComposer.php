<?php

namespace App\Http\ViewComposers;

use App\Services\Dao\SportsDao;

class SportsComposer
{
    private $sportsDao;

    public function __construct(SportsDao $sportsDao)
    {
        $this->sportsDao = $sportsDao;
    }

    public function compose($view)
    {
        $view->with("sports", $this->sportsDao->listSports()->keyBy('id')->toArray());
    }
}