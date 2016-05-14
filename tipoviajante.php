<!DOCTYPE html>
<html lang="en">
<?php include 'head.php'; ?>
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
    <header class="intro-header" style="background-image: url('img/bg-produtividade.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="post-heading">
                        <h1>Que tipo de viajante é você?</h1>
                        <h2 class="subheading">Faça o quizz e descubra que tipo de viajante você é!</h2>
                        <span class="meta">Adicionado em Maio de 2016</span>
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
                  <script type="text/javascript" src="//cdn.playbuzz.com/widget/feed.js"></script>
<div class="pb_feed" data-embed-by="b93482cf-fed5-469d-b134-2aede72be330" data-game="/stefanov10/a-que-tipo-de-viajante-voc" ></div>
                </div>
            </div>
        </div>
    </article>

    <hr>

    <!-- Footer -->
    <?php include 'footer.php';?>

</body>

</html>
