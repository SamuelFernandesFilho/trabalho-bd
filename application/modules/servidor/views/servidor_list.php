<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('url');
?>

<section class="content-header">
	<h1>
		Listar
		<small>Servidor</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="<?php echo base_url('/home');?>"><i class="fa fa-dashboard"></i> Página inicial</a></li>
		<li class="active">Servidor</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">
	<!-- Indica uma ação bem-sucedida ou positiva -->

	<form class="form-inline">
  	<div class="form-group col-xs-6">
			<a type="button" href="<?php echo base_url('servidor/adicionar')?>" class="btn btn-success">Adicionar servidor</a>
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
				<th>Nome</th>
				<th>Descrição do cargo</th>
				<th>Orgão lotação</th>
				<th>UF exercicio</th>
				<th>Data ingresso</th>
				<th>Remuneração básica</th>
				<th>Orgão exercicio</th>
				<th>Editar</th>
				<th>Excluir</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>1</td>
				<td>org teste</td>
				<td>1</td>
				<td>org teste</td>
				<td>1</td>
				<td>org teste</td>
				<td>1</td>
				<td> <a role="button" class="btn btn-primary" href="#">Editar</a> </td>
				<td> <a role="button" class="btn btn-danger" href="#"> Excluir </a> </td>
			</tr>
		</tbody>
   </table>

	 <!-- paginacao -->
	 <nav aria-label="Page navigation">
  <ul class="pagination">
    <li>
      <a href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li>
      <a href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>

</section>


<!-- CRUDs
-lotaçao
-lotação superior
-organizacao de exercicio
-organizacao de exercicio superior
-servidor
-afastamento
-honorario  -->
