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
		$this->load->view('main_content', $dados);
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
