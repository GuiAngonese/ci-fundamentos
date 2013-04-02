<?php
	Class Clients extends CI_Controller{

		public function create(){
			$this->load->helper('form');
			$this->load->library('form_validation');

			$data['nome'] = '';

			$this->form_validation->set_rules('nome', 'Nome', 'required');
			$this->form_validation->set_rules('cidade', 'Cidade', 'required');

			if ($this->form_validation->run() === FALSE){
			$this->load->view('templates/header', $data);	
			$this->load->view('clients/create');
			$this->load->view('templates/footer');
			
			}else{
				$this->clients_model->set_clients();
				$this->load->view('clients/success');
			}
			}
		public function deletar($id){

		if ($this->clients_model->deletar($id)){
			        redirect('clients');
			} else {
			        log_message('error', 'Erro ao deletar...');
			}
		}

		public function editar($id)	{

		$this->load->helper('form');


		if ($_POST) {			
			$dados['nome'] = $this->input->post('nome');
			$dados['cidade'] = $this->input->post('cidade');

			$this->db->where('id', $id);
			$this->db->update('clients',$dados);
			redirect('clients');
		} else {
			$data['clients'] = $clientsthis->db->get_where('clients', array('id' => $id))->row_array();
			$this->load->view('templates/header', $data);	
			$this->load->view('clients/editar');
			$this->load->view('templates/footer');
		}

	}

		}

	