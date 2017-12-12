<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\Dao\SportsDao;
use App\Services\Dao\TickerTextDao;

class TickerTextController extends Controller
{
    public function get($sportId, SportsDao $sportsDao, TickerTextDao $tickerTextDao)
    {
        $sport = $sportsDao->find($sportId);
        return $this->getResponseBySport($sportsDao, $tickerTextDao, $sport);
    }

    public function conference(SportsDao $sportsDao, TickerTextDao $tickerTextDao)
    {
        $sport = $sportsDao->findByName("conference");
        return $this->getResponseBySport($sportsDao, $tickerTextDao, $sport);
    }

    private function getResponseBySport(SportsDao $sportsDao, TickerTextDao $tickerTextDao, $sport)
    {
        if ($sport) {
            if ($sport->name === "conference") {
                $tickerText = $tickerTextDao->all();
            } else {
                $tickerText = $tickerTextDao->getFor($sport->id);
            }

            $sports = $sportsDao->listSports()->keyBy('id')->toArray();
            $tickerText->map(function ($text) use ($sports) {
                $text->sportart = isset($sports[$text->sport_id]) ? $sports[$text->sport_id]["name"] : "undefined";
                $text->isHighlight = $text->is_highlight;
                unset($text->is_highlight);
                unset($text->created_at);
                unset($text->updated_at);
                return $text;
            });

            return response()->json([
                "Sportart" => [
                    "spart_id" => $sport->id,
                    "spart_name" => $sport->name,
                    "tickertxt" => [
                        "message" => $tickerText->toArray()
                    ]
                ]
            ]);

        }
        abort(404);
    }
}