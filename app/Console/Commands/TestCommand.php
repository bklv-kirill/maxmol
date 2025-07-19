<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class TestCommand extends Command
{
    protected $signature = 'test:run';

    protected $description = 'Command for running test';

    public function handle(): void
    {
        dd('test');
    }
}
