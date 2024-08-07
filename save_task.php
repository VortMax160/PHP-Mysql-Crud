<?php

include("db.php");

if(isset($_POST['save_task'])){
    $title = $_POST['title'];
    $description = $_POST['description'];
    
    $query = "INSERT INTO tarea(titulo, descripcion) VALUES ('$title', '$description')";
    $result = mysqli_query($conn, $query);
    if(!$result){
        die("Consulta fallida");
    }


    $_SESSION['message'] = 'Tarea Guardada Correctamente';
    $_SESSION['message_type'] = 'success';

    header("location: index.php");
}

?>