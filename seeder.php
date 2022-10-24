<?php
use Blog\Content;
require_once "bootstrap.php";

$newTitleName = $argv[1];
$newContentName = $argv[2];

$content = new Content();

$content->setContent($newContentName);
$content->setTitle($newTitleName);
$entityManager->persist($content);
$entityManager->flush();


echo "Created Content with ID " . $content->getId() . "\n";