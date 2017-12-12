<?php

namespace App\Services\Dao;

use App\TickerText;

class TickerTextDao
{
    public function save($input)
    {
        TickerText::create($input);
    }

    public function get()
    {
        return TickerText::paginate(2);
    }
}