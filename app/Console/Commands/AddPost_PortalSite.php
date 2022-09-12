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
    protected $signature = 'post:create_website';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add new post in website:https://www.portal.ir';


    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        Post::create([
            'title'=>'hhhh',
            'slug'=>'hhhh',
            'admin_id'=>'1',
            'published'=>'1',
            'image'=>'published',
            'content'=>'published',
        ]);

    }
}
