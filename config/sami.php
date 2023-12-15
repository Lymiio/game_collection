<?php

use Sami\Sami;
use Symfony\Component\Finder\Finder;

$iterator = Finder::create()
    ->files()
    ->name('*.php')
    ->in('src');

return new Sami($iterator, [
    'theme' => 'default',
    'title' => 'My Documentation',
    'build_dir' => __DIR__ . '/../docs',
    'cache_dir' => __DIR__ . '/../cache',
]);
?>