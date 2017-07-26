<php

class DAL_chani {
    $host = '127.0.0.1';
    $db   = 'northwind';
    $user = 'root';
    $pass = '';
    $charset = 'utf8';
    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    $pdo;

    $my_Data_Base = new PDO($dsn, $user, $pass, $opt);
    $WorkerId = $_POST['Wid'];
    $WorkerNeme = $_POST['Wmame'];
    $WorkerDate = $_POST['startDate'];


    public function __construct {
            $this->pdo = new PDO($dsn, $user, $pass, $opt);


    }
}