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

    public function all()
    {
        return TickerText::all();
    }

    public function getFor($sportId)
    {
        return TickerText::where('sport_id', $sportId)->orderBy("created_at")->get();
    }
}