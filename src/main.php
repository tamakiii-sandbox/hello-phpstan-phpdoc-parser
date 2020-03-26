<?php

use PHPStan\PhpDocParser\Lexer\Lexer;
use PHPStan\PhpDocParser\Parser\TypeParser;
use PHPStan\PhpDocParser\Parser\ConstExprParser;
use PHPStan\PhpDocParser\Parser\TokenIterator;
use PHPStan\PhpDocParser\Parser\PhpDocParser;

require __DIR__ . '/../vendor/autoload.php';

$stdin = file_get_contents('php://stdin');

$input = $stdin;

$lexer = new Lexer;
$phpDocParser = new PhpDocParser(new TypeParser, new ConstExprParser);

$tokens = new TokenIterator($lexer->tokenize($input));
$actualPhpDocNode = $phpDocParser->parse($tokens);
var_dump($actualPhpDocNode);