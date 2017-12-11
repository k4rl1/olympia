<?php

namespace App\Console\Commands;

use App\Services\Dao\SportsDao;
use Illuminate\Console\Command;

class DeleteSoccer extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sport:delete {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'delete sport entry';

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
        $this->sportsDao->delete($this->argument("name"));
    }
}
