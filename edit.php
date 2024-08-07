<?php
include("db.php");


    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "SELECT * FROM tarea WHERE id = $id";
        $result = mysqli_query($conn,$query);
        if (mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_array($result);
            $title = $row['titulo'];
            $description = $row['descripcion'];
        }

    }
    if(isset($_POST['update'])){
        $id = $_GET['id'];
        $title = $_POST['title'];
        $description = $_POST['description'];

        $query = "UPDATE tarea set titulo = '$title', descripcion = '$description' WHERE id = $id";
        mysqli_query($conn, $query);

        $_SESSION['message'] = 'Tarea Actualizada Correctamente';
        $_SESSION['message_type'] = 'warning';
        header("location: index.php");
    }
    
?>

<?php include("includes/header.php")?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="edit.php?id=<?php echo $_GET['id'];?>" method="POST">
                    <div class="mb-3">
                        <input type="text" name="title" value="<?php echo $title?>" class="form-control" placeholder="Actualiza el titulo">
                    </div>
                    <div class="mb-3">
                        <textarea name="description" rows="2" class="form-control" placeholder="Actualizar Descripcion"><?php echo $description?></textarea>
                    </div>
                    <button class="btn btn-success btn-block" name="update">
                        Actualizar
                    </button>
                </form>
            </div>
        </div>
    </div>

</div>

<?php include("includes/footer.php")?>