<?php
$url = 'https://growtopiagame.com/detail';
$html = file_get_contents($url);

if ($html === FALSE) {
    die('diblock jir');
    }

    $dom = new DOMDocument();
    libxml_use_internal_errors(true);
    $dom->loadHTML($html);
    libxml_clear_errors();
    $body = $dom->getElementsByTagName('body')->item(0);
    echo $body->textContent;
    ?>