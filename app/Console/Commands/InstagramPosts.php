<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\InstagramPost;

class InstagramPosts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'instagram:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Genera gli ultimi post di un account';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $newPath = new InstagramPost();
        $newPath->post_path = "prova";
        $newPath->save();
    }
}
