<?php

namespace App\Services\Dao;

class MenuDao
{
    public function getMenuItemList()
    {
        return [
            "Documentation" => "https://laravel.com/docs",
            "Laracasts" => "https://laracasts.com",
            "News" => "https://laravel-news.com",
            "Forge" => "https://forge.laravel.com",
            "GitHub" => "https://github.com/laravel/laravel",
        ];
    }
}