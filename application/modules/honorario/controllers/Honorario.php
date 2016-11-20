<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Honorario extends CI_Controller {
	/*Renderiza a view para consultar-editar-excluir fornecedores*/
	public function consultar()
	{

		$this->template->load('layout/layout','honorario/honorario_list');
		// $this->load->database();

		// $data['cliente'] = $this->db->get('cliente')->result();
		//
		// $this->load->view('layout/header');
		// $this->load->view('cliente/cliente_consultar', $data);
		// $this->load->view('layout/footer');
	}

}
