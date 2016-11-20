<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lotacaosup extends CI_Controller {
	/*Renderiza a view para consultar-editar-excluir fornecedores*/

	function __construct() {
   parent::__construct();
	 $this->load->model('Lotacao_sup_model');
  }

	public function consultar()
	{

		$this->load->library('pagination');
		$config = array();

		$config['base_url'] = 'http://127.0.0.1/COM231/index.php/lotacaosup/consultar';
		$config['total_rows'] = $this->Lotacao_sup_model->count_lotacoes();
		$config['per_page'] = 10;

		$this->pagination->initialize($config);
		$data['lotacoes_sup'] = $this->Lotacao_sup_model->fetch_lotacoes($config['per_page'],
																																		 $this->uri->segment(3));
		$data['links'] = $this->pagination->create_links();

		$this->template->load('layout/layout','lotacaosup/lotacaosup_list', $data);
	}

	public function remover($id) {
		$this->load->helper('url');
		$this->load->database();

		$this->db->delete('lotacoes_superiores', array('cod_orgsup_lotacao' => $id));
		redirect(base_url('lotacaosup/consultar'));
	}

	public function editar($id) {
		$this->db->where('cod_orgsup_lotacao', $id);
		$data['lotacoes_sup'] = $this->db->get('lotacoes_superiores')->result();

		$this->template->load('layout/layout','lotacaosup/lotacaosup_edit', $data);

	}

	public function atualizar($id) {
			$this->load->helper('url');
			$this->load->database();
			
			$this->db->update('lotacoes_superiores',
				array('cod_orgsup_lotacao' => $id, 'orgsup_lotacao' => $_POST['orglotacao']),
				array('cod_orgsup_lotacao' => $id)
			);
			redirect(base_url('lotacaosup/consultar'));
	}

	public function inserir() {
		$this->load->helper('url');
		$this->load->database();

		$data = array(
	   'orgsup_lotacao' => $_POST['orglotacao']
	 	);

		$result = $this->db->insert('lotacoes_superiores', $data);
		redirect(base_url('lotacaosup/consultar'));
	}

	public function adicionar()
	{
		$this->template->load('layout/layout','lotacaosup/lotacaosup_add');
	}

}
