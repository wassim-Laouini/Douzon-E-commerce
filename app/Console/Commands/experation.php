<?php

namespace App\Console\Commands;

use App\Models\client;
use Illuminate\Console\Command;

class experation extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'experation:monthly';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'will close your account monthly';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $experation = client::where('experation',0)->get();
        
        foreach($experation as $exper ){
            $exper-> update(['experation'=> 1]);
           
        }
    }
}
