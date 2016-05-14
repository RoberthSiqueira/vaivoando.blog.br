    <!-- MODAL -->

<div class="modal fade" id="meumodal">
<div class="modal-dialog">
<div class="modal-content">

<div class="modal-header">
<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Fechar</span></button>
</div>

<img src="img/modal.png" class="img-responsive"/>
<div class="modal-body">
<h3 class="modal-titulo">Olá! Que bom que você está aqui!</h3>
<p style="line-height: 1.5;margin: 30px 0;font-size: 16px;margin-bottom: 10px;margin-top: 20px;">*Aproveite e cadastre seu e-mail para obter nosso material e concorra a cupons de desconto para a compra de passagens na MaxMilhas</p>
</div>
<div class="col-md-12">
          <form id="formModal" action="#">
                <div class="form-group">
                  <span id="msg_success_modal" class="alert alert-success hidden"></span>
                  <span id="msg_error_modal" class="alert alert-danger hidden"></span>
                  <input type="text" class="form-control" id="cidadeEb" name="cityModal" placeholder="Cidade">
                </div>
                <div class="form-group">
                  <!-- <label for="exampleInputPassword1">E-mail</label> -->
                  <input type="email" class="form-control" id="emaileb" name="emailModal" placeholder="E-mail">
                </div>
          </form>
</div>
<div class="modal-footer">
<button onclick="gravarModal(); return false;" type="button" class="btn btn-primary">Enviar</button>
</div>

</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
