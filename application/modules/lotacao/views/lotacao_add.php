<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('url');
?>

<section class="content-header">
	<h1>
		Adicionar
		<small>Lotação</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="<?php echo base_url('/home');?>"><i class="fa fa-dashboard"></i> Página inicial</a></li>
		<li><a href="<?php echo base_url('/lotacao/consultar');?>">Lotação</a></li>
		<li class="active">Adicionar lotação</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">

  <div class="container" style="width:70%; margin-left:0px; ">
    <form class="form-horizontal">
  <div class="form-group">
    <label for="organizacao" class="col-sm-2 control-label">Orgão lotação</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="orglotacao" placeholder="Orgão lotação">
    </div>
  </div>
  <div class="form-group">
    <label for="orglotacaosup" class="col-sm-2 control-label">Orgão lotação superior</label>
    <div class="col-sm-10">
      <select class="form-control">
				<option>teste1</option>
				<option>teste2</option>
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
