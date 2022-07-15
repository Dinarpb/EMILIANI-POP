<?php

if(isset($_POST['enviar']))
{
    if( !empty($_POST['asunto']) && !empty($_POST['msg']) && !empty($_POST['email']))
    {
        
        $email = $_POST["email"];
        $asunto = $_POST['asunto'];
        $msg = $_POST['msg'];
        $header = "X-Mailer: PHP/" . phpversion();
        $mail = @mail($email, $asunto, $msg , $header);

        if($mail)
        {
           
        }
    }
}


?>