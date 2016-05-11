<?php
  //include './system/index.inc.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="GamaAcademy">

    <?php include 'icons.php'; ?>

    <title>Vai Voando | Quem Somos</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- <a class="navbar-brand" href="index.html">Start Bootstrap</a> -->
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                     <li>
                        <a href="quem_somos.php">Quem Somos</a>
                    </li>
<!--                     <li>
    <a href="contact.html">Contato</a>
</li>  -->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/bg_home.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                       <a href="index.php"> <img  width="300px" height="300px" src="marca_branco.png"/> </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

        <!-- Faixa Azul -->
        <?php include 'blueBar.php';?>

    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <h1>Sobre Nós</h1>
                    <hr>
<p>Está sem ideias para o seu próximo destino? Ou você já sabe para onde vai e quer algumas dicas? O Vai Voando é um blog voltado para pessoas que desejam dicas rápidas e práticas tanto para viajar a trabalho, quanto de férias.</p>
<p>Quem não já teve, pelo menos uma vez, dúvida sobre a escolha de um destino ou o que pode ser levado na mala de mão? Nós vamos te ajudar a esclarecer essas e outras questões e colaborar para que a sua viajem seja exatamente como você planejou.</p>
<p>Assine nossa newsletter para receber semanalmente as novidades que postamos aqui e baixe nosso e-book que traz algumas dicas essenciais para você viajar pelo Brasil. Além disso, ajudamos você a economizar na compra das passagens. <a href="#">Clique aqui</a> e saiba como.</p>
                </div>
            </div>
        </div>
    </article>

    <hr>

<!-- Footer -->
    <?php include 'footer.php';?>

</body>

</html>