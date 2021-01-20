<?php

namespace App\Console\Commands;

use App\Models\Project;
use GrahamCampbell\GitHub\Facades\GitHub;
use GrahamCampbell\GitHub\GitHubManager;
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
    protected $description = 'Fetch and updating changes repositories from GitHub';

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
        $existingRepos = [];

        foreach($repos as $repo) {
            $name = str_replace(".", "-", $repo["name"]);
            $existingRepos[] = $name;

            if($repo['language']) {
                DB::table('projects')
                    ->updateOrInsert(
                        ['name' => $name],
                        [
                            'name' => $name,
                            'html_url' => $repo["html_url"],
                            'description' => $repo["description"],
                            'stargazers_count' => $repo["stargazers_count"],
                            'language' => $repo["language"],
                        ]
                    );
            }
        }
        Project::whereNotIn('name', $existingRepos)->delete();
    }
}
