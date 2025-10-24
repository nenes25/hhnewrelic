<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__)
    ->exclude('vendor')
    ->exclude('tests/coverage')
    ->name('*.php')
    ->notName('index.php')
;

$config = new PhpCsFixer\Config();
return $config
    ->setRiskyAllowed(true)
    ->setRules([
        '@PSR12' => true,
        '@Symfony' => true,
        'concat_space' => ['spacing' => 'one'],
        'cast_spaces' => ['space' => 'none'],
        'error_suppression' => ['mute_deprecation_error' => false, 'noise_remaining_usages' => false, 'noise_remaining_usages_exclude' => []],
        'function_to_constant' => false,
        'no_alias_functions' => false,
        'non_printable_character' => false,
        'phpdoc_summary' => false,
        'phpdoc_align' => ['align' => 'left'],
        'protected_to_private' => false,
        'self_accessor' => false,
        'yoda_style' => false,
        'non_printable_character' => ['use_escape_sequences_in_strings' => true],
    ])
    ->setFinder($finder)
;
