<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Main_Page extends CI_Controller {

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
		$this->load->view('Main_Page_User');

	}

	public function regist()
	{
		$this->load->view('page_signup');
	}

	public function corporate()
	{
		$this->load->view('View_corporate');
	}

	public function cekin()
	{
		$this->load->view('checkin');
	}

	public function jadwal_penerbangan_user()
	{
		$this->load->view('header');
		$this->load->view('jadwal_penerbangan_cust');
	}
	public function indexFlight()
	{
		$this->load->view('indexFlight');
	}

	public function hotelUser()
	{
		$this->load->view('header');
		$this->load->view('daftar_hotel_cust');
	}


	// ADMIN

	public function main_page_admin()
	{
		$this->load->view('Main_Page_admin');
	}

	public function hotelAdmin()
	{
		$this->load->view('header');
		$this->load->view('daftar_hotel_admin');
	}

	public function addHotel()
	{
		$this->load->view('header');
		$this->load->view('tambah_hotel_admin');
	}

	public function jadwal_penerbangan_admin()
	{
		$this->load->view('header');
		$this->load->view('jadwal_penerbangan_admin');
	}

	public function addFlight()
	{
		//$this->load->view('header');
		$this->load->view('tambah_penerbangan_admin');
	}
}
