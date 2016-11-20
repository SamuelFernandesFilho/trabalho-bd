<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('url');
?>

<section class="content-header">
	<h1>
		Adicionar
		<small>Servidor</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="<?php echo base_url('/home');?>"><i class="fa fa-dashboard"></i> Página inicial</a></li>
		<li><a href="<?php echo base_url('/servidor/consultar');?>">Servidor</a></li>
		<li class="active">Adicionar servidor</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">

  <div class="container" style="width:90%; margin-left:0px; ">
    <form class="form-horizontal">
  <div class="form-group">
    <label for="nome" class="col-sm-2 control-label">Nome</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nome" placeholder="Nome">
    </div>
  </div>
	<div class="form-group">
    <label for="descricao_cargo" class="col-sm-2 control-label">Descrição do cargo</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="descricao_cargo" placeholder="Descrição do cargo">
    </div>
  </div>
	<div class="form-group">
    <label for="jornada_trabalho" class="col-sm-2 control-label">Jornada de trabalho</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="jornada_trabalho" placeholder="Jornada de trabalho">
    </div>
  </div>
	<div class="form-group">
    <label for="orgsuplotacao" class="col-sm-2 control-label">Orgão Superior de Lotação</label>
    <div class="col-sm-10">
      <select class="form-control">
				<option>teste1</option>
			</select>
    </div>
  </div>
	<div class="form-group">
    <label for="orglotacao" class="col-sm-2 control-label">Orgão de Lotação</label>
    <div class="col-sm-10">
      <select class="form-control">
				<option>teste1</option>
			</select>
    </div>
  </div>
	<div class="form-group">
    <label for="situacao_vinculo" class="col-sm-2 control-label">Situação vínculo</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="situacao_vinculo" placeholder="Situação vínculo">
    </div>
  </div>
	<div class="form-group">
    <label for="regime_juridico" class="col-sm-2 control-label">Regime jurídico</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="regime_juridico" placeholder="Regime jurídico">
    </div>
  </div>

	<div class="form-group">
		<label for="uf_exercicio" class="col-sm-2 control-label">UF exercício</label>
		<div class="col-sm-10">
			<select class="form-control">
				<option>teste1</option>
			</select>
		</div>
	</div>

	<div class="form-group">
    <label for="data_ingresso_cargo" class="col-sm-2 control-label">Data de ingresso no cargo</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="data_ingresso_cargo" placeholder="Data de ingresso no cargo">
    </div>
  </div>

	<div class="form-group">
    <label for="data_ingresso_orgao" class="col-sm-2 control-label">Data de ingresso no orgao</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="data_ingresso_orgao" placeholder="Data de ingresso no orgão">
    </div>
  </div>

	<div class="form-group">
    <label for="remuneracao_basica" class="col-sm-2 control-label">Remuneração básica</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="remuneracao_basica" placeholder="Remuneração básica">
    </div>
  </div>

	<div class="form-group">
    <label for="organizacao_exercicio" class="col-sm-2 control-label">Organização exercício</label>
		<div class="col-sm-10">
			<select class="form-control">
				<option>teste1</option>
			</select>
		</div>
  </div>

	<div class="form-group">
    <label for="organizacao_superior_exercicio" class="col-sm-2 control-label">Organização superior de exercício</label>
		<div class="col-sm-10">
			<select class="form-control">
				<option>teste1</option>
			</select>
		</div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Adicionar</button>
    </div>
  </div>
</form>
  </div>


</section>
