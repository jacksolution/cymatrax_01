<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\UserSubscription;

class RemoveFilesCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'remove:cron';

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
        
        unlink(public_path('upload/1680544308_file_example_MP3_1MG.mp3'));
        // $remove = DB::table('uploads')->Where( 'created_at', '<', Carbon::now()->subDays(15))->pluck('file_name');
        // foreach($remove as $val){
        //     $delete = "upload/".$val;
        //     unlink(public_path($delete));
        // }

         \Log::info("Cron is working fine!");

    }
}
