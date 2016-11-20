<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Organizacao extends CI_Controller {
	/*Renderiza a view para consultar-editar-excluir fornecedores*/
	public function consultar()
	{

		$this->template->load('layout/layout','organizacao/organizacao_list');
	}
	public function adicionar()
	{

		$this->template->load('layout/layout','organizacao/organizacao_add');
	}

}
