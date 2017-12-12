<?php

namespace App\Services\Dao;

use App\Sports;

class SportsDao
{
    public function add($name)
    {
        Sports::where('name', $name)->firstOrCreate(["name" => $name]);
    }

    public function delete($name)
    {
        $sport = Sports::where("name", $name);
        $sport->delete();
    }

    public function listSports()
    {
        return Sports::orderBy("id")->get(["id", "name"]);
    }

    public function find($sportId)
    {
        return Sports::where("id", $sportId)->first();
    }

    public function findByName($name)
    {
        return Sports::where("name", $name)->first();
    }
}