<?php

namespace Cares0107\ExemplePackage\Commands;

use Illuminate\Console\Command;

class ExemplePackageCommand extends Command
{
    public $signature = 'exemple';

    public $description = 'My command';

    public function handle()
    {
//        $text = config('exemple-package.command_output_text');
//        $this->comment($text);
    }
}
