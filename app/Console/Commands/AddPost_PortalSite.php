<?php

namespace App\Console\Commands;

use App\Models\Post;
use Illuminate\Console\Command;

class AddPost_PortalSite extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:name';

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
        $post = new Post();
        $post->title ="ghjghjhgj";
        $post->slug = "hjghjghj";
        $post->admin_id = '1';
        $post->published = '1';
        $post->image = "hjgjhgjghj";
        $post->content = "hjghjghjg";
        $post->save();

    }
}
