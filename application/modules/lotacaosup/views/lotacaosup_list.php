<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('url');
?>

<section class="content-header">
	<h1>
		Listar
		<small>Lotação Superior</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="<?php echo base_url('/home');?>"><i class="fa fa-dashboard"></i> Página inicial</a></li>
		<li class="active">Lotação Superior</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">
	<form class="form-inline">
  	<div class="form-group col-xs-6">
			<a  href="<?php echo base_url('lotacaosup/adicionar')?>" type="button" class="btn btn-success">Adicionar lotação superior</a>
		</div>
		<div class="form-group col-xs-6">
	    <label for="pesquisar">Pesquisar</label>
	    <input type="text" class="form-control" id="pesquisar" placeholder="Pesquisar">
			<button type="submit" class="btn btn-default">Pesquisar</button>
		</div>
</form>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Código</th>
				<th>Orgão superior lotação</th>

				<th>Editar</th>
				<th>Excluir</th>
			</tr>
		</thead>
		<tbody>
			<?php if ($lotacoes_sup != false): ?>
			  <?php foreach ($lotacoes_sup as $lotacao_sup): ?>
					<tr>
						<td><?=$lotacao_sup->cod_orgsup_lotacao ?></td>
						<td><?=$lotacao_sup->orgsup_lotacao ?></td>

						<td> <a role="button" class="btn btn-primary" href="<?php echo base_url('lotacaosup/editar/'.$lotacao_sup->cod_orgsup_lotacao) ?>">Editar</a> </td>
						<td> <a role="button" class="btn btn-danger" href="<?php echo base_url('lotacaosup/remover/'.$lotacao_sup->cod_orgsup_lotacao) ?>"> Excluir </a> </td>
					</tr>
		  	<?php endforeach; ?>
			<?php endif ?>
		</tbody>
   </table>
	 <?php echo $this->pagination->create_links(); ?>

</section>


<!-- CRUDs
-lotaçao
-lotação superior
-organizacao de exercicio
-organizacao de exercicio superior
-servidor
-afastamento
-honorario  -->
