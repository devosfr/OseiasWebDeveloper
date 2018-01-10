<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>.::E-Mail::.</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>

<body>
<?php
 $nome=$_POST['nome'];
 $email=$_POST['email'];
 $assunto=$_POST['assunto'];
 $mensagem=$_POST['mensagem'];
?>
<?php 
$to="oseiasdesignb@gmail.com";
$subject="$assunto";
$message="$nome, $email, $assunto, $mensagem";
$header="MIME-Version: 1.0\n";
$header="Content-type: text/html; charset=iso-8859-1\n";
$header="From: $email\n";
mail($to, $subject, $messagem, $header);
?><br/><br/><br/><br/><br/><br/>
<?php echo "<h1 style=\"text-align:center\">Mensagem Enviada com Sucesso!</h1>";?>

<center><a class="btn btn-info" href="contato.php">VOLTAR PARA A ÚLTIMA PAGINA ACESSADA</a></center>

</body>
</html>
