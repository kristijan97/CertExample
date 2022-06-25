<?php

namespace App\Console\Commands;

use App\Models\Instance;
use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

abstract class BaseCommand extends Command
{
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $method = method_exists($this, 'handle') ? 'handle' : '__invoke';

        $count = 0;
        Instance::inAllActiveSpaces(function ($instance) use ($method, &$count) {
            $count += $this->laravel->call([$this, $method]);
        });

        return $count;
    }
}
