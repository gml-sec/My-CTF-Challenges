<?php

$finder = PhpCsFixer\Finder::create()->in(__DIR__);

return (new PhpCsFixer\Config())
    ->setFinder($finder)
    ->setRules(array(
        '@Symfony' => true,
        '@Symfony:risky' => true,
        'fopen_flags' => false,
        '@PHPUnit48Migration:risky' => true,
        'array_syntax' => ['syntax' => 'short'],
        'ordered_imports' => true,
        'php_unit_no_expectation_annotation' => false, // part of `PHPUnitXYMigration:risky` ruleset, to be enabled when PHPUnit 4.x support will be dropped, as we don't want to rewrite exceptions handling twice
        'protected_to_private' => false,
    ))
    ->setRiskyAllowed(true)
;
