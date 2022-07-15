
<?php include("enviar.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maquetación contactos</title>
    <script src="correo.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
    function nom_ape(evt){
            if(window.event){
                keynum = evt.keyCode;
            }else{
                keynum = evt.which;
            }
            
            if(keynum > 64 && keynum < 91 || keynum > 96 && keynum < 123  || keynum > 159 && keynum < 166 || keynum == 130 || keynum == 239 || keynum == 32){
                return true;
            }else{
                alert("No puede ingresar números en estos campos");
                return false;
            }
        }
        
        function num(evt){
    if(window.event){
        keynum = evt.which;
    }else{
        keynum = evt.which;
    }
    //estos son los códigos que estarán bloqueados
    if((keynum > 47 && keynum < 58)){
        return true;
    }else{
        //esta alerta indica si intentan ingresar algún caracter 
        alert("No puede ingresar letras en estos campos");
        return false;
    }
}
        
    
</script>

</head>
<body>
    <div class="d-flex justify-content-center" style="margin-top:5%">
    <h1>Maquetación de contactos</h1>
    </div>
    
    
        
    
    <div class="d-flex justify-content-center" style="margin-top:1%">
    
    <div class="card" style="width: 30rem;height:35rem;border-color:black">
    <div class="card-body">
        <form action="enviar.php" method="POST">
    <br>
    <?php if(isset($_SESSION['message'])) { ?>
                    
                    <div class="alert alert-<?= $_SESSION['message_type'];?>
                    alert-dismissible fade show" role="alert">
                        <?= $_SESSION['message'] ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>  

                    <?php session_unset(); } ?>
        <input required type="text" name="Nombre" class="form-control" style="width:100%;border-color:black" placeholder="Nombre" id="Nombre" onkeypress="return nom_ape(event)">
        <br>
        <input required class="form-control" style="width:100%;border-color:black" type="email" name="Correo" id="Correo" placeholder="Correo">
        <br>
        <input required class="form-control" style="width:100%;border-color:black" type="mensaje" name="Telefono" id="Telefono" placeholder="Teléfono" onkeypress="return num(event)" maxlength="8" >
        <br>
        <textarea required class="form-control" style="height:50%;border-color:black" placeholder="Mensaje" type="mensaje" name="Mensaje" id="Mensaje">
        </textarea>
        <br>
        <button type="submit" class="btn btn-warning" name="envio">Enviar mensaje</button>
        </form>
</div>
    </div>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>