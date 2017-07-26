<?php
include ('button.php');
include ('get.php');
include ('user.php');
include ('connect.php');
$get;

$buttonValue = ($_POST['submit']);
$UserDetails = new User($_POST['Wid'], $_POST['Wmame'], $_POST['startDate'] );
$DB = new connect();
$DB->getDB();
$DB = $DB->getDB();

    switch ($buttonValue) {
        case "get":
            $get= new get($_POST['Wid'], $DB);
            $get->userDetals($DB);
            echo $get->idDetails;
            break;
        default:
        echo "error";

}

//         case 'get':
//         case "add":
//         case "update":
//         case "delete":
//         case "all":
