<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
class BaroksahInstall extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'baroksah:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install dummy data untuk aplikasi baroksah';

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
     * @return mixed
     */
    public function handle()
    {
        if ($this->confirm('Ini akan menghapus semua data yang kamu buat diganti dengan dummy data, yakin? (y/n)')) 
        {

            File::deleteDirectory(public_path('storage/products/dummy'));
            $this->callSilent('storage:link');
            $copySuccess = File::copyDirectory(public_path('images/products'),public_path('storage/products/dummy'));
            if ($copySuccess) {
                $this->info('Images berhasil di salin ke storage folder');
            }

            $this->call('migrate:fresh',[
               '--seed'=>true, 
            ]);

            $this->call('db:seed',[
                '--class'=>'VoyagerDatabaseSeeder', 
            ]);

             $this->call('db:seed',[
                '--class'=>'VoyagerDummyDatabaseSeeder', 
            ]);

            
            $this->info('Dummy data Baroksah berhasil di install');
        }
    }
}
