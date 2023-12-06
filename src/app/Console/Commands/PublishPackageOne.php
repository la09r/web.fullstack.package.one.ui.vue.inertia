<?php

namespace App\Console\Commands;

use Illuminate\Support\Facades\File;

class PublishPackageOne extends PublishFiles
{
    private const PATH_FROM = '.local/module/package-one/src';
    
    private const FILES = [
        'resources/php/menu/Dashboard/package-one.php'                     => 'php/menu/Dashboard/package-one.php',
        'resources/js/ComponentsAsync/Dashboard/Widget/PackageOneInfo.vue' => 'js/ComponentsAsync/Dashboard/Widget/PackageOneInfo.vue',
    ];
    
    protected $signature   = 'app:publish-package-one';
    protected $description = 'Publish done';

    public function handle()
    {
        $this->publishFiles(self::FILES, self::PATH_FROM);

        print PHP_EOL . $this->description . PHP_EOL;
    }
}
