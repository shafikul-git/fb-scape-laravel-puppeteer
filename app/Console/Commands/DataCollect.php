<?php

namespace App\Console\Commands;

use App\Http\Controllers\CollectDataController;
use Illuminate\Console\Command;

class DataCollect extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:data-collect';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $collecting = new CollectDataController();
        $getData = $collecting->collectData();
        $this->info($getData);
        return 0;
    }
}
