<?php

namespace App\Console\Commands;

use App\Sports;
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

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $sport = Sports::where("name", $this->argument('name'));
        $sport->delete();
    }
}
