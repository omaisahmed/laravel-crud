<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Post;
use App\Mail\SendMailable;
use Illuminate\Support\Facades\Mail;


class HourlyUpdate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'hour:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'First Cron Job';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Post::create([
            'title'=>'Roshan90 Title',
            'body'=>'body description',
            'created_at'=>'NULL',
            'updated_at'=>'NULL',

        ]);

        Mail::to("omais@outorigin.com")->send(new SendMailable());

        \Log::info("Cron is working fine!");

        $this->info('Hourly Update has been send successfully');
    }
}
