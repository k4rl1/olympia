<?php

namespace App\Http\Controllers;


use App\Services\Dao\TickerTextDao;
use Illuminate\Http\Request;

class TickerTextController extends Controller
{
    public function create()
    {
        return view("tickertext.create");
    }

    public function save(TickerTextDao $tickerTextDao, Request $request)
    {
        $this->validate($request, [
            'time' => 'required|regex:/^\d{2}\:\d{2} Uhr$/',
            'title' => 'max:256',
            'text' => 'required|max:5000',
        ]);

        $tickerTextDao->save($request->all());
        return redirect()->back()->with('message', 'TickerText created.');
    }

    public function listTickerText(TickerTextDao $tickerTextDao)
    {
        $tickerText = $tickerTextDao->get();

        return view("tickertext.list", compact("tickerText"));
    }
}