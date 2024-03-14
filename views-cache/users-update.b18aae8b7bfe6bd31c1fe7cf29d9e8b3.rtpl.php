<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Lista de Usuários
  </h1>
</section>

<!-- Main content -->
<section class="content">

  <div class="row">
  	<div class="col-md-12">
  		<div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Editar Equipamento/Material</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="/admin/users/<?php echo htmlspecialchars( $user["destag"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" method="post">
          <div class="box-body">
            <div class="form-group">
              <label for="desperson">TAG</label>
              <input type="text" class="form-control" id="destag" name="destag" placeholder="Digite a nova TAG" value="<?php echo htmlspecialchars( $user["destag"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
            </div>
            <div class="form-group">
              <label for="deslogin">Mat./Eqp.</label>
              <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Digite o nome do material e/ou equipamento"  value="<?php echo htmlspecialchars( $s["descricao"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
            </div>
            <div class="form-group">
              <label for="nrphone">Nota Fiscal</label>
              <input type="text" class="form-control" id="desnf" name="desnf" placeholder="Digite a Nota Fiscal"  value="<?php echo htmlspecialchars( $user["desnf"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
            </div>
            <div class="form-group">
              <label for="desemail">Local</label>
              <input type="text" class="form-control" id="deslocal" name="deslocal" placeholder="Digite em qual unidade se encontra" value="<?php echo htmlspecialchars( $user["deslocal"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
            </div>
            <!--<div class="checkbox">
              <label>
                <input type="checkbox" name="inadmin" value="1" <?php if( $user["inadmin"] == 1 ){ ?>checked<?php } ?>> Acesso de Administrador
              </label>
            --></div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Salvar</button>
          </div>
        </form>
      </div>
  	</div>
  </div>

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->