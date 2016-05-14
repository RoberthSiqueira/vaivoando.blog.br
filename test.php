<!DOCTYPE html>
<html lang="pt-br">
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

    <!-- MODAL -->

<div class="modal fade" id="meumodal">
<div class="modal-dialog">
<div class="modal-content">

<div class="modal-header">
<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Fechar</span></button>
</div>

<img src="img/modal.png" class="img-responsive"/>
<div class="modal-body">
<h3 class="modal-titulo">Olá! Que bom que você está aqui!.</h3>
<p style="line-height: 1.5;margin: 30px 0;font-size: 16px;margin-bottom: 10px;margin-top: 20px;">Aproveite e cadastre seu e-mail para obter nosso material e dicas exclusivas de como conseguir passagens aéreas pagando até 80% mais barato.</p>
</div>
<div class="col-md-12">
          <form id="formEbook" action="#">      
                <div class="form-group">
                  <!-- <label for="exampleInputPassword1">Cidade</label> -->
                  <input type="text" class="form-control" id="cidadeEb" name="cityEbook" placeholder="Cidade">
                </div>
                <div class="form-group">
                  <!-- <label for="exampleInputPassword1">E-mail</label> -->
                  <input type="email" class="form-control" id="emaileb" name="emailEbook" placeholder="E-mail">
                </div>
          </form>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-primary">Enviar</button>
</div>

</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->





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

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            
            	<div class="post-preview">
                    <a href="bagagemmao.php">
                        <h2 class="post-title">
                            O que pode ou não pode como bagagem de mão
                        </h2>
                        <h3 class="post-subtitle">
                        	Vai viajar e bateu aquela dúvida sobre o que pode e não pode levar na bagagem de mãos? Preparamos um resumo com tudo o que você precisa saber.
                        </h3>
                        <img src="img/bagagemmao.jpg" class="img-responsive" width="750px" style="margin-top: 15px; margin-bottom: 15px;"/>
                    </a>
                    <p class="post-meta">Adicionado em Maio de 2016</p>
                    <img src="">
                </div>
                <hr>
            	
            	<div class="post-preview">
                    <a href="viagemnegocios.php">
                        <h2 class="post-title">
                            10 dicas para uma viagem a negócios tranquila
                        </h2>
                        <h3 class="post-subtitle">
                            Viajar a negócios pode ser tão divertido quando

viajar de férias. Por isso, selecionamos algumas dicas para garantir que sua viajem

aconteça sem sustos.
                        </h3>
                        <img src="img/viagemnegocios.jpg" class="img-responsive" width="750px" style="margin-top: 15px; margin-bottom: 15px;"/>
                    </a>
                    <p class="post-meta">Adicionado em Maio de 2016</p>
                    <img src="">
                </div>
                <hr>

		<div class="post-preview">
                    <a href="economizarcompra.php">
                        <h2 class="post-title">
                            Aprenda a economizar na compra de passagens
                        </h2>
                        <h3 class="post-subtitle">
                            O valor da passagem aérea é um dos grandes vilões na hora de planejar a

viagem. Confira algumas dicas para conseguir o melhor preço.
                        </h3>
                        <img src="img/economizarcompra.jpg" class="img-responsive" width="750px" style="margin-top: 15px; margin-bottom: 15px;"/>
                    </a>
                    <p class="post-meta">Adicionado em Maio de 2016</p>
                    <img src="">
                </div>
                <hr>

		<div class="post-preview">
                    <a href="desmistificandorio.php">
                        <h2 class="post-title">
                            Desmistificando: o Rio de Janeiro além das praias
                        </h2>
                        <h3 class="post-subtitle">
                            Sede dos jogos olímpicos, o Rio de Janeiro possui atrações para todos os gostos. Separamos algumas dicas incríveis para você conhecer o que a cidade tem de melhor.
                        </h3>
                        <img src="img/desmistificando.jpg" class="img-responsive" width="750px" style="margin-top: 15px; margin-bottom: 15px;"/>
                    </a>
                    <p class="post-meta">Adicionado em Maio de 2016</p>
                    <img src="">
                </div>
                <hr>
                
                
		<div class="post-preview">
                    <a href="batevoltaferiado.php">
                        <h2 class="post-title">
                            Bate e volta no feriado: o que levar na bolsa
                        </h2>
                        <h3 class="post-subtitle">
                            Para você que gosta de fazer viagens curtas ou dar uma escapada da rotina no final de semana.
                        </h3>
                        <img src="img/feriado.jpg" class="img-responsive" width="750px" style="margin-top: 15px; margin-bottom: 15px;"/>
                    </a>
                    <p class="post-meta">Adicionado em Maio de 2016</p>
                    <img src="">
                </div>
                <hr>
                
                
            	<div class="post-preview">
                    <a href="4dicas.php">
                        <h2 class="post-title">
                            4 dicas para viajar sem gastar muito dinheiro
                        </h2>
                        <h3 class="post-subtitle">
                            Dica para você que curte viajar, mas está desempregado, é estudante, torrou todo o salário ou é um mão-de-vaca mesmo.
                        </h3>
                        <img src="img/4dicascapa.jpg" class="img-responsive" width="750px" style="margin-top: 15px; margin-bottom: 15px;"/>
                    </a>
                    <p class="post-meta">Adicionado em Maio de 2016</p>
                    <img src="">
                </div>
                <hr>
          
                <div class="post-preview">
                    <a href="destinos_brasil.php">
                        <h2 class="post-title">
                            4 destinos espetaculares para conhecer no Brasil
                        </h2>
                        <h3 class="post-subtitle">
                            Conheça quatro destinos brasileiros que estão fora da rota tradicional de viagem. São destinos de belezas encantadoras com opções de lazer para todos os gostos: praias, passeios culturais e aventureiros.
                        </h3>
                        <img src="img/destino.jpg" class="img-responsive" width="750px" style="margin-top: 15px; margin-bottom: 15px;"/>
                    </a>
                    <p class="post-meta">Adicionado em Maio de 2016</p>
                    <img src="">
                </div>
                <hr>
                <div class="post-preview">
                    <a href="olimpiadas.php">
                        <h2 class="post-title">
                            O que fazer nas cidades-sede das Olimpíadas?
                        </h2>
                        <h3 class="post-subtitle">
                            Há muito o que fazer nas cidades sede das Olímpiadas além de assistir aos jogos. Preparamos dicas para conhecer Manaus, São Paulo, Salvador, Belo Horizonte e Rio de Janeiro no tempo livre entre as competições. Confira!
                        </h3>
                        <img src="img/olimpiadas.jpg" class="img-responsive" width="750px" style="margin-top: 15px; margin-bottom: 15px;"/>
                    </a>
                    <p class="post-meta">Adicionado em Maio de 2016</p>
                </div>
                <hr>
                <div class="post-preview">
                    <a href="viagem_aviao.php">
                        <h2 class="post-title">
                           Produtividade: como aproveitar melhor o tempo de voo
                        </h2>
                        <h3 class="post-subtitle">
                            Pouco espaço, assentos desconfortáveis, turbulências e medo. Saiba como aproveitar melhor o tempo de voo e reduzir desconfortos durante a viagem.
                        </h3>
                        <img src="img/aviao_4.jpg" class="img-responsive" width="750px" style="margin-top: 15px; margin-bottom: 15px;"/>
                    </a>
                    <p class="post-meta">Adicionado em Maio de 2016</p>
                </div>
                <hr>
                <!-- Pager -->
                <!--<ul class="pager">
                    <li class="next" style="float: none;">
                        <a href="#">Mostrar Mais &rarr;</a>
                    </li>
                </ul>-->
            </div>
        </div>
    </div>

    <hr>
    
    <?php include 'footer.php';?>
    
    </body>

</html>