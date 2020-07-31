<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class DropDbMigrateReseed extends Command
{
    protected $signature = 'db:dropReseed';
    protected $description = 'drops the DBs remigrate and reseed the dbs';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $this->call('migrate:fresh');
        $this->call('db:seed');
    }
}
