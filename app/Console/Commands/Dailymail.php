<?php

namespace App\Console\Commands;

use App\Models\client;
use Illuminate\Console\Command;

class Dailymail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'daily:mail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'will send every day mail';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $clients = client::select('email');
        foreach($clients as $client){
            
        }
        
    
    }
}
