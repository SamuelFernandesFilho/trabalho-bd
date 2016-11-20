<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('url');
?>

<section class="content-header">
	<h1>
		Listar
		<small>Organização</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="<?php echo base_url('/home');?>"><i class="fa fa-dashboard"></i> Página inicial</a></li>
		<li class="active">Organização</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">
	<form class="form-inline">
  	<div class="form-group col-xs-6">
			<a type="button" href="<?php echo base_url('organizacao/adicionar')?>" class="btn btn-success">Adicionar organição</a>
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
				<th>Codigo</th>
				<th>Organização</th>
				<th>Orgão superior</th>
				<th>Editar</th>
				<th>Excluir</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>1</td>
				<td>organição teste</td>
				<td>Orgao superior teste</td>
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
