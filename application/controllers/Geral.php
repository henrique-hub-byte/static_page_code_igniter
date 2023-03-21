<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Geral extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		/* array associativo */
		$this->load->model('GeralModel');

		$dados['hoteis'] = $this->GeralModel->imagensHoteis();

		$this->load->view('template/header');
		$this->load->view('users/login');
		$this->load->view('template/footer');

	}

	public function verificarLogin()
	{
		$this->load->model('users');
		if($this->users->verificarLogin())
		{
			echo 'ok';
		} else {
			echo 'não';
		}
		 
	}

	public function setup()
	{
		$this->load->view('template/header');
		$this->load->view('template/cabecalho');

		$this->load->view('setup/setup');
		$this->load->view('template/footer');
	}

	public function resetdb()
	{
		$this->load->model('BaseDados');
		$this->BaseDados->reset();
		//apresenta a view
		$this->load->view('template/header');
		$this->load->view('setup/setup');
		$dados = [
			'mensagem' => 'Sistema de base de dados reiniciado com sucesso',
			'tipo' => 'success'
		];

		$this->load->view('template/mensagem', $dados);
		$this->load->view('template/footer');
		
	}

	public function inserirUsuario()
	{
		$this->load->model('BaseDados');
		$this->BaseDados->inserirUsuario();

		//apresenta view
		$this->load->view('template/header');
		$this->load->view('setup/setup');

		$dados = [
			'mensagem' => 'Inserido 3 usuarios com sucesso.',
			'tipo' => 'success'
		];
		
		$this->load->view('template/mensagem', $dados);
		$this->load->view('template/footer');
	}

	public function inserirProduto()
	{
		$this->load->model('BaseDados');
		$this->BaseDados->inserirProduto();

		//apresenta view
		$this->load->view('template/header');
		$this->load->view('setup/setup');

		$dados = [
			'mensagem' => 'Inserido produtos com sucesso.',
			'tipo' => 'success'
		];
		
		$this->load->view('template/mensagem', $dados);
		$this->load->view('template/footer');
	}

	public function hotel($id)
	{
		$this->load->model('GeralModel');
		$dados['hotel'] = $this->GeralModel->hotel($id);
		$this->load->view('template/header');
		$this->load->view('hotel_page', $dados);
		$this->load->view('template/footer');
	}

	public function p2($nome)
	{
		echo $nome;
		$this->load->view('template/header');
		$this->load->view('initial_content/content_2');
		$this->load->view('template/footer');
	}

	public function p3($nome, $idade = 26)
	{
		echo $nome . ' - ' . $idade;
		$this->load->view('template/header');
		$this->load->view('initial_content/content_3');
		$this->load->view('template/footer');
	}
}
