<?php
include_once ('connect.php');
if(isset($_POST['submit'])) {
    if(($_POST['title'] != "") && ($_POST['article'] != "") ) {
        $DB = new connect();
        $DB = $DB->getDB();
        $NewIn=insertNewArticle($_POST['title'],$_POST['article'], $DB);
    }
    else {
        echo "please fill the filds!";
    }
}

 function insertNewArticle($title, $article, $DB) {
    $title = $title;
    $article = $article;
    $DB = $DB;

    $insertNew = $DB->prepare("INSERT INTO ls42_contents(header, article) VALUES(:header, :article)");
    $insertNew->execute(array("header"=> $title, "article"=> $article));
                echo "your article was added to database";
                echo printAll($DB);

}

function printAll($DB){
$DB = $DB;
$newArticle = $DB->prepare('SELECT * FROM ls42_contents');
$newArticle->execute();

while ($row = $newArticle->fetch()) {
            echo "<h2>" . $row['header'] . "</h2></br><p>" . $row['article'] . "</p></br>";
        }

}
?>