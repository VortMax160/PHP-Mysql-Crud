<?php

session_start();


$conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'php_mysql_crud'
);

/*if (isset($conn)) {
    echo "BD Esta Conectada"; //Para saber si esta conectada la base de datos.
}*/

?>