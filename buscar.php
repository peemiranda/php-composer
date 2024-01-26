<?php

require 'vendor/autoload.php';

use GuzzleHttp\Client;
use Alura\Buscador\Buscador;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client(['base_uri' => 'https://alura.com.br/']);
$crawler = New Crawler();

$buscador = new Buscador($client, $crawler);
$cursos = $buscador->buscar('/cursos-online-programacao/php');

foreach ($cursos as $curso) {
    echo $curso . PHP_EOL;
}
