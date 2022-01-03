<?php

use PhpCsFixer\Finder;

$finder = Finder::create()
    ->notPath('vendor')
    ->in(getcwd(). '/src')
    ->name('*.php')
    ->ignoreDotFiles(true)
    ->ignoreVCS(true);

return Codeat3\styles($finder);

