<?php

namespace App\Http\ViewComposers;

use App\Services\Dao\MenuDao;
use Illuminate\View\View;

class MenuComposer
{
    private $menuItems;

    public function __construct(MenuDao $menuDao)
    {
        $this->menuItems = $menuDao->getMenuItemList();
    }

    public function compose(View $view)
    {
        $view->with("menuItems", $this->menuItems);
    }
}