<?php
    // Validar id valido Hay que cambiar el Id a un INT porque me lo toma como STR
    $id = $_GET['id'];
    //$id = filter_var($id, FILTER_VALIDATE_INT);
    //if(!$id); {
     //   header('Location: ../');
    // }

    

    // Coneccion DB
    require  "../../includes/config/database.php";
    $db = conectarDB();
        //where id = ${id}
    // Obtener los datos de la propiedad
    $consulta = "SELECT * FROM polo_crud.form_personas where id = ${id} ";
    $resultado = mysqli_query ($db, $consulta);
    $persona = mysqli_fetch_assoc($resultado);

    if (!$resultados) {
        die("Error en la consulta: " . mysqli_error($conexion));
      }

     $nombre = $persona['nombre'];
     $apellido = $persona['apellidos'];
     $email = $persona['email'];
   

?>
    <main class="contenedor seccion">
        <h1>Perfil del Candidato</h1>
                
        <?php foreach($errores as $error): ?>
        <div class="alerta error">
        <?php echo $error; ?>
        </div>

        <?php endforeach; ?>

        <h3>Nombre : <?php echo $persona['nombre'] ?></h3>
        <h3>Apellido : <?php echo $persona['apellidos'] ?></h3>
        <h3>E-mail : <?php echo $persona['email'] ?></h3>
        <h3>Telefono : <?php echo $persona['telefono'] ?></h3>
        <h3>Fecha de Nacimiento : <?php echo $persona['nombre'] ?></h3>
        <!--<h3>Genero : <?php echo $persona[''] ?></h3>
        <h3>Lugar de Residencia: <?php echo $persona[''] ?></h3>
        <h3>Localidad : <?php echo $persona[''] ?></h3>
        <h3>Curso realizado en el Polo Tecnoligico: <?php echo $persona[''] ?></h3>
        <h3> : <?php echo $persona[''] ?></h3> -->
              
     

            <input type="submit" value="Concretar una entrevista" class="boton-verde">
            </fieldset>
        </form>
    </main>

<?php
mysqli_close($db);
?>
