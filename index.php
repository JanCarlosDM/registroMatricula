<?php
include("include/conexion.php");

include("include/header.php")
    ?>



<div class="container container-fluid">

    <div class="row">
        <div class="col-md-12">
            <h2>Registro de Alumnos<span class="badge bg-secondary"></span></h2>


            <?php
            if (isset($_SESSION['mensaje'])) { ?>

                <div class="alert alert-<?= $_SESSION['tipoMensaje'] ?> alert-dismissible fade show" role="alert"
                    id="guardado">
                    <?= $_SESSION['mensaje'] ?>
                    <button type="button" class="close" aria-label="Close" data-bs-dismiss="alert"></button>
                </div>

                <?php session_unset();

            }
            ?>


            <div class="row">
                <div class="col-md-4">


                    <form role="form" action="guardar.php" method="POST">
                        <div class="form-group">

                            <label for="matricula">
                                Matricula
                            </label>
                            <input type="text" class="form-control" name="matricula" id="matricula"
                                placeholder="Su Matricula" autofocus>

                        </div>
                        <div class="form-group">

                            <label for="nombre">
                                Nombre
                            </label>
                            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Tu Nombre"
                                autofocus>
                        </div>


                        <button type="submit" class="btn btn-primary" name="registroAlumno">
                            Guardar
                        </button>
                    </form>
                </div>




                <div class="col-md-8">


                    <table class="table table-success table-striped" id="Usuarios">
                        <thead>
                            <tr>
                                <th scope="col">Matricula</th>
                                <th scope="col">Nombre del Estudiante</th>
                                <th scope="col">Fecha de Registro</th>

                            </tr>
                        </thead>
                        <tbody>

                            <?php

                            $consultaUsuarios = "SELECT matricula, nombre, fecha_registro FROM estudiantes";
                            $resultadoUsuarios = mysqli_query($conexion, $consultaUsuarios);

                            while ($celda = mysqli_fetch_array($resultadoUsuarios)) { ?>

                                <tr>
                                    <td>
                                        <?php echo $celda['matricula'] ?>
                                    </td>
                                    <td>
                                        <?php echo $celda['nombre'] ?>
                                    </td>
                                    <td>
                                        <?php echo $celda['fecha_registro'] ?>
                                    </td>
                                   
                                </tr>


                                <?php
                            }


                            ?>


                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>




</div>

<?php
include("include/footer.php");


?>