<?php
$header = <<<EOF

(c) Kajsa Taipale.

EOF;
$rules = [
    '@PSR2' => true,
    'header_comment' => [
      'header' => $header,
      'location' => 'after_open'
    ],
];
$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__);
return PhpCsFixer\Config::create()
    ->setRules($rules)
    ->setFinder($finder);
