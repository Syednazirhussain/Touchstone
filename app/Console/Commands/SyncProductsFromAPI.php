<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\OfficeAPIService;

class SyncProductsFromAPI extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'product:sync';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Synchronize products from Office API';

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
        $endPoint = "GetProducts";

        $response = (new OfficeAPIService)->sendPostRequest($endPoint);
        if ($response->ok()) {

            dump($response->json());
        } else {

            dump("Failed");
        }
    }
}
