<?php
include_once ('connect.php');

$DB = new connect();
$DB = $DB->getDB();

$newArticle = $DB->prepare('SELECT * FROM ls42_contents');
$newArticle->execute();

while ($row = $newArticle->fetch()) {
            echo "<h2>" . $row['header'] . "</h2></br><p>" . $row['text'] . "</p></br>";
        }


