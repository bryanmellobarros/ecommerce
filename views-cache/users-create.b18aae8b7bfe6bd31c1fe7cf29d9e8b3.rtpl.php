<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Cadastro no Estoque
  </h1>
  <ol class="breadcrumb">
    <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="/admin/users">Estoque</a></li>
    <li class="active"><a href="/admin/users/create">Cadastrar</a></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">

  <div class="row">
  	<div class="col-md-12">
  		<div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title">Novo Material/Equipamento</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="/admin/users/create" method="post">
          <div class="box-body">
            <div class="form-group">
              <label for="destag">TAG</label>
              <input type="text" class="form-control" id="destag" name="destag" placeholder="Digite a TAG">
            </div>
            <div class="form-group">
              <label for="descricao">Material/Equipamento</label>
              <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Digite o nome">
            </div>
            <div class="form-group">
              <label for="desnf">Nota Fiscal</label>
              <input type="text" class="form-control" id="desnf" name="desnf" placeholder="Digite o número da NF">
            </div>
            <div class="form-group">
              <label for="deslocal">Unidade</label>
              <input type="text" class="form-control" id="deslocal" name="deslocal" placeholder="Digite a unidade que se encontra o material">
            </div>
            <!---<div class="form-group">
              <label for="despassword">Senha</label>
              <input type="password" class="form-control" id="despassword" name="despassword" placeholder="Digite a senha">
            </div>
            <div class="checkbox">
              <label>
                <input type="checkbox" name="inadmin" value="1"> Acesso de Administrador
              </label>
            </div>
          </div>-->
          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-success">Cadastrar</button>
          </div>
        </form>
      </div>
  	</div>
  </div>

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->