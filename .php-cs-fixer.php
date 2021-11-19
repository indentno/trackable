<?php

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

$finder = Finder::create()
    ->exclude('tests/Fixtures')
    ->in(__DIR__);

$config = new Config;
$config
    ->setRiskyAllowed(true)
    ->setRules([
        '@PSR2' => true,
        'single_quote' => true,
        'array_indentation' => true,
        'trailing_comma_in_multiline' => true,
        'method_chaining_indentation' => true,
        'binary_operator_spaces' => true,
        'strict_comparison' => true,
        'standardize_not_equals' => true,
        'strict_param' => true,
        'concat_space' => [
            'spacing' => 'one',
        ],
        'array_syntax' => [
            'syntax' => 'short',
        ],
        'no_unused_imports' => true,
        'no_useless_else' => true,
        'blank_line_before_statement' => [
            'statements' => [
                'break',
                'continue',
                'declare',
                'for',
                'foreach',
                'if',
                'return',
                'throw',
                'try',
                'while',
            ],
        ],
        'whitespace_after_comma_in_array' => true,
        'ordered_imports' => [
            'imports_order' => [
                'class',
                'function',
                'const',
            ],
            'sort_algorithm' => 'alpha',
        ],
        'return_type_declaration' => [
            'space_before' => 'none',
        ],
        'cast_spaces' => true,
    ])
    ->setFinder($finder);

return $config;
