<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use App\Mail\NotifyMail;
use App\Models\Stock;

class AutoLowStockAlert extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'auto:lowstockalert';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send low stock alert email automatically';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $stocks = Stock::whereRaw('quantity < low_stock_alert')->get();
        Mail::to('glhneah@gmail.com')->send(new NotifyMail($stocks));
        return 0;
    }
}
