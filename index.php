<?php
// phpinfo();

try {
    mysqli_connect("db", "root", "base_php_docker") or die(mysqli_error());
    echo "Connected to MySQL<br />";
} catch (\Exception $ex) {
    echo "Falha ao conectar";
    echo "<pre>";
    print_r($ex->getMessage());
    echo "</pre>";
}