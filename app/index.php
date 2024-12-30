<?php

use Symfony\Component\Filesystem\Filesystem;

require __DIR__ . '/vendor/autoload.php';

const NL = '<br>';

$filesystem = new Filesystem();

echo 'Es gibt die Datei index.html: ' . ($filesystem->exists('index.html') ? 'Ja' : 'Nein'). NL;
echo 'Die Datei enthält '.strlen($filesystem->readFile('index.html')).' Zeichen'. NL;
