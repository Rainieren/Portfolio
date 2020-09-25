<?php

namespace App\Console\Commands;

use GrahamCampbell\GitHub\Facades\GitHub;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class UpdateGithub extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:github';

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
        $repos = GitHub::connection('main')->me()->repositories();

        foreach($repos as $repo) {
            DB::table('projects')
                ->updateOrInsert(
                    ['name' => $repo["name"]],
                    [
                        'name' => $repo["name"],
                        'html_url' => $repo["html_url"],
                        'description' => $repo["description"],
                        'stargazers_count' => $repo["stargazers_count"],
                        'language' => $repo["language"],
                    ]
                );
        }
    }
}
