<?php
include("db.php")
?>
<!--Incluyendo y reutilizando el header-->
<?php include("includes/header.php") ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4">

            <?php if (isset($_SESSION['message'])) { ?>
                <div class="alert alert-<?=$_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">
                 <!--Modifica el color del mensaje de acuerdo a lo que tengas guardado en save_task.php--> 
                    <?= $_SESSION['message'] ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
             <!--Limpia los datos en la sesion actual-->   
            <?php session_unset();} ?>

            <div class="card car-body">
                <form action="save_task.php" method="post">
                    <div class="form-group">
                        <input type="text" name="title" class="form-control" placeholder="Task Title" autofocus>
                    </div>
                    <div class="form-group">
                        <textarea name="description" id="" cols="" rows="2" class="form-control" placeholder="Task Description"></textarea>
                    </div>
                    <input type="submit" class="btn btn-success btn-block" name="save_task" value="Save Task">
                </form>
            </div>
        </div>
        <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Titulo</th>
                        <th>Descripcion</th>
                        <th>Creado en</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                     <!--Consultando mis tareas de la base de datos msqli--> 
                    <?php
                    $query ="SELECT * FROM task";
                    $result_tasks = mysqli_query($conn, $query);

                    while($row = mysqli_fetch_array($result_tasks)){?>
                        <tr>
                            <td>
                                <?php echo $row['title'] ?>
                            </td>
                            <td>
                                <?php echo $row['description'] ?>
                            </td>
                            <td>
                                <?php echo $row['created_at'] ?>
                            </td>
                            <td>
                                 <!--creando el boton editar y pasando el id-->
                                <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary"> <i class="fa fa-edit"></i>
                                </a>
                                <!--creando el boton borrar y pasa el id-->
                                <a href="delete_task.php?id=<?php echo $row['id']?>" class="btn btn-danger"> <i class="fa fa-trash-o"></i>
                                </a>
                            </td>
                        </tr>
                    <?php }
                    ?>
                </tbody>
            </table>            
        </div>
    </div>
</div>

<!--Incluyendo y reutilizando el footer-->
<?php include("includes/footer.php") ?>