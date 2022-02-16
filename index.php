<?php
// phpinfo();

try {
    $conn = mysqli_connect("db", "root", "".getenv('MYSQL_ROOT_PWD', '')."", "".getenv('MYSQL_DB', '')."");
    echo "Connected to MySQL<br />";
    var_dump($conn);
    exit;

} catch (\Exception $ex) {
    echo "Falha ao conectar";
    echo "<pre>";
    print_r($ex->getMessage());
    echo "</pre>";
}