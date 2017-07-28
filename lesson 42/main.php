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
                printAll($DB);

}

function printAll($DB){
$DB = $DB;
$newArticle = $DB->prepare('SELECT * FROM ls42_contents');
$newArticle->execute();
            echo "<head>
                <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' integrity='sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u' crossorigin='anonymous'>
                </head><body>";

while ($row = $newArticle->fetch()) {
            echo "<div class='jumbotron' style='width:650px; margin-left: 50px; padding: 30px'><h2>" . $row['header'] . "</h2></br><p>" . addRowsToHtmlContent($row['article']) . "</p></div></br>";
        }
echo "</body>";
}


         function addRowsToHtmlContent($content) {
            return str_replace(".", ".<br>", $content);
        }

?>