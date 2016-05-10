<!-- Footer -->
    <footer style="background-color: #ff8500;">
        <div class="container">
            <div class="row">

                <div class="col-md-6">
                  <div class="footer_news">
                    <img src="img/capa-ebook.png" height="130px">
                    <p>Baixe nosso E-Book “Guia Prático Para Viajar Pelo Brasil”</p>
                          
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">
                              Saiba Mais
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content" style="color:#404040" "text-align:left;">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Guia Prático Para Viajar Pelo Brasil</h4>
                                  </div>
                                  <div class="modal-body">
                                          <img src="img/capa-ebook.png" class="img-responsive" height="300px" style="margin-bottom:15px;" margin-top:"15px">
                                          <span id="msg_success_ebook" class="alert alert-success hidden"></span>
		                          <span id="msg_error_ebook" class="alert alert-danger hidden"></span>
                                          <form id="formEbook" action="#">      
                                                <div class="form-group">
                                                  <!-- <label for="exampleInputPassword1">Cidade</label> -->
                                                  <input type="text" class="form-control" id="cidadeEb" name="cidadeEbook" placeholder="Cidade">
                                                </div>
                                                <div class="form-group">
                                                  <!-- <label for="exampleInputPassword1">E-mail</label> -->
                                                  <input type="email" class="form-control" id="emaileb" name="emailEbook" placeholder="E-mail">
                                                </div>
                                          </form>

                                          <a href="assets/politica_de_privacidade.pdf" style="font-size:12px;">Política de privacidade</a>

                                  </div>
                                  <div class="modal-footer">
                                    <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
                                    <button onclick="gravarEbook(); return false;" class="btn btn-primary btn-sm">Download</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="footer_news_2">
                    <h2>ASSINE NOSSA NEWSLETTER</h2>
                    <p>Você ama viajar e quer receber dicas incríveis toda semana? Assine nossa Newsletter!</p>
                    <span id="msg_success_news" class="alert alert-success hidden"></span>
                    <span id="msg_error_news" class="alert alert-danger hidden"></span>
                    <form id="formNews" action="#">
                          <div class="form-group">
                            <!-- <label for="exampleInputPassword1">Password</label> -->
                            <input type="email" class="form-control" id="emailNew" name="emailNews" placeholder="E-mail">
                          </div>
                          <button onclick="gravarNewsLetter(); return false;" class="btn btn-primary btn-sm">Seu E-mail &rarr;</button>
                    </form>
                  </div>
                </div>

            </div>
        </div>
          <div class="container">
            <div class="row">
                <div class="col-md-12">
                     <hr style="background-color: #ffffff;">
                    
                    
                    <ul class="list-inline text-center">
                        <li>
                            <a href="https://www.facebook.com/Vai-Voando-118182325259188/">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    </ul>

		<p class="copyright text-muted" style="color: #ffffff;">Copyright &copy; 2016 - Gama BootCamp 2016 - #Team 3</p>
                </div>
            </div>
          </div>

    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    
    <script type="text/javascript">	     
        function gravarProp(){
	
	          $.ajax({
	              method: "post",
	              url: "./system/prop.inc.php",
	              data: $("#formProp").serialize(),
	              success: function(data){
	                if (data == "Boa escolha"){
	                $("#msg_success_prop").html(data);
	                $("#msg_success_prop").removeClass('hidden');
	                $("#msg_error_prop").addClass('hidden');
	                window.open("4dicas.php", "_self");
	                }
	                else {
	                  $("#msg_error_prop").html(data);
	                  $("#msg_error_prop").removeClass('hidden');
	                  $("#msg_success_prop").addClass('hidden');
	                }
	
	              }
	          });
	      }
	  
    	function gravarEbook(){
	
	          $.ajax({
	              method: "post",
	              url: "./system/ebook.inc.php",
	              data: $("#formEbook").serialize(),
	              success: function(data){
	                if (data == "Adicionado com Sucesso"){
	                $("#msg_success_ebook").html(data);
	                $("#msg_success_ebook").removeClass('hidden');
	                $("#msg_error_ebook").addClass('hidden');
	                }
	                else {
	                  $("#msg_error_ebook").html(data);
	                  $("#msg_error_ebook").removeClass('hidden');
	                  $("#msg_success_ebook").addClass('hidden');
	                }
	
	              }
	          });
	      }
    
	function gravarNewsLetter(){
	
	          $.ajax({
	              method: "post",
	              url: "./system/newsletter.inc.php",
	              data: $("#formNews").serialize(),
	              success: function(data){
	                if (data == "Adicionado com Sucesso"){
	                $("#msg_success_news").html(data);
	                $("#msg_success_news").removeClass('hidden');
	                $("#msg_error_news").addClass('hidden');
	                }
	                else {
	                  $("#msg_error_news").html(data);
	                  $("#msg_error_news").removeClass('hidden');
	                  $("#msg_success_news").addClass('hidden');
	                }
	
	              }
	          });
	      }
    </script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/clean-blog.min.js"></script>
