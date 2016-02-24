<?php

$finder = Symfony\CS\Finder\DefaultFinder::create()
    ->in('src');

$fixers = [
    'concat_with_spaces',
    'ordered_use',
    'phpdoc_order',
    'return',
    'short_array_syntax'
];

return Symfony\CS\Config\Config::create()
    ->level(Symfony\CS\FixerInterface::PSR2_LEVEL)
    ->fixers($fixers)
    ->finder($finder);
