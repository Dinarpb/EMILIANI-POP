<?php
    include("index.php");

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query= "SELECT * FROM imagenes WHERE id=$id";
        $result=mysqli_query($conexion, $query);

        if(mysqli_num_rows($result)==1){
            $row = mysqli_fetch_array($result);
            $nombre = $row['Nombre'];
            $img = $row['Img'];
        }
    }

    if(isset($_POST['update'])){
        $id = $_GET['id'];
        $nombre = $_POST['Nombre'];
        $img = $_POST['Img'];

        $query = "UPDATE imagenes SET Nombre='$nombre', Img='$img' WHERE id=$id";
        mysqli_query($conexion, $query);

        header("Location: pop.php");

    }

?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="modificar_img.php?id=<?php echo $_GET['id']; ?>" method="POST">

                    <div class="form-group">
                        <input type="text" name="Nombre" value="<?php echo $nombre ?>"
                        class="form-control" placeholder="Actualizar titulo">
                    </div>

                    <div class="form-group">
                        <textarea name="Img" rows="2" class="form-control"
                        placeholder="Actualizar la descripción">
                            <?php echo $img ?>
                        </textarea>
                    </div>

                    <button class="btn btn-success" name="update">Actualizar</button>
                </form>
            </div>
        </div>
    </div>
</div>

