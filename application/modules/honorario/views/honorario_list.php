<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('url');
?>

<section class="content-header">
	<h1>
		Honorario
		<small>Listar</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="<?php echo base_url('/home');?>"><i class="fa fa-dashboard"></i> Página inicial</a></li>
		<li class="active">Honorario</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">
	<form class="form-inline">
  	<div class="form-group col-xs-6">
			<button type="button" class="btn btn-success">Adicionar honorario</button>
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
				<th>Servidor</th>
				<th>Empresa</th>
				<th>Valor</th>
				<th>Editar</th>
				<th>Excluir</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Samuel</td>
				<td>VASP</td>
				<td>10,00</td>
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
