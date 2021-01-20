<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use GrahamCampbell\GitHub\Facades\GitHub;
use GrahamCampbell\GitHub\GitHubManager;
use Illuminate\Support\Facades\DB;

class ProcessGithub implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {

    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $repos = GitHub::connection('main')->me()->repositories();

        foreach($repos as $repo) {
            DB::table('projects')
                ->updateOrInsert(
                    ['name' => $repo["name"]],
                    [
                        'name' => str_replace(".", "-", $repo["name"]),
                        'html_url' => $repo["html_url"],
                        'description' => $repo["description"],
                        'stargazers_count' => $repo["stargazers_count"],
                        'language' => $repo["language"],
                    ]
                );
        }
    }
}
