<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resep extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('Daftar_Resep/list');
	}

  public function batagorbandung()
	{
		$this->load->view('Daftar_Resep/batagorbandung');
	}

  public function buburmanado()
	{
		$this->load->view('Daftar_Resep/buburmanado');
	}

  public function candilketan()
	{
		$this->load->view('Daftar_Resep/candilketan');
	}

  public function krengsengankoyo()
	{
		$this->load->view('Daftar_Resep/krengsengankoyo');
	}

  public function pallubasa()
	{
		$this->load->view('Daftar_Resep/pallubasa');
	}

  public function pempekpalembang()
	{
		$this->load->view('Daftar_Resep/pempekpalembang');
	}

  public function satelilit()
	{
		$this->load->view('Daftar_Resep/satelilit');
	}

  public function seblakbandung()
	{
		$this->load->view('Daftar_Resep/seblakbandung');
	}

  public function sopkonro()
	{
		$this->load->view('Daftar_Resep/sopkonro');
	}

  public function sotopadang()
	{
		$this->load->view('Daftar_Resep/sotopadang');
	}

  public function tahutek()
	{
		$this->load->view('Daftar_Resep/tahutek');
	}

}
