<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TickerText extends Model
{
    protected $table = 'ticker_text';
    protected $fillable = ["time", "sport_id", "is_highlight", "title", "text"];
}
