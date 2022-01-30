<?php

namespace App\Console\Commands;

use Binance\API;
use ccxt\binance;
use Illuminate\Console\Command;

class Copy extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'trades:copy';

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
        $parent = new binance([
           "apiKey" => env("PARENT_KEY"), "secret" => env("PARENT_SECRET"),
        ]);
        $parent->load_time_difference();

        $parent->load_markets();

    }
}
