<?php

namespace App\Console\Commands;

use GrahamCampbell\GitHub\Facades\GitHub;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class FetchGithubRepositories extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fetch:github:repositories';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * @return int
     */
    public function handle()
    {
        //
    }
}
