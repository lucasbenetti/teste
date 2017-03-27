<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <title>Email</title>
        </head>
        <body style="width:50%;width:1024px; height:768px; margin-left:auto; margin-right:auto;background-image: url('bground1.jpg'); background-attachment: fixed; background-size: contain; border-radius:2%">
            
         
                
            <?php
        
                $nome = $_POST["nome"];
                $email = $_POST["email"];
                $mensagem = $_POST["mensagem"];


                $para = "benettilucas_@hotmail.com";

                $assunto = "Fale conosco (projeto-integrador)";

                $corpo = "Nome: $nome  <br>E-mail: $email <br>Mensagem: $mensagem";

                $header = "From: $nome <$para> Reply-to: $email ";
                $header = "Content-Type: text/html; charset=iso-8859-1 ";

                mail($para, $assunto, $corpo, $header);

                $msg = "Olá $nome, o seu e-mail foi enviado. Aguarde, você será redirecionado!";


                echo "<script>location.href='fale-conosco.html'; alert('$msg');</script>";
                
           ?>

           
                
        </body>
    </html>