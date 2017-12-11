<?php

namespace App\Console\Commands;

use App\Services\Dao\SportsDao;
use Illuminate\Console\Command;

class ListSports extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sport:list';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'List all sports';

    private $sportsDao;

    public function __construct(SportsDao $sportsDao)
    {
        parent::__construct();
        $this->sportsDao = $sportsDao;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $headers = ["ID", "Name"];
        $this->table($headers, $this->sportsDao->listSports()->toArray());
    }
}
