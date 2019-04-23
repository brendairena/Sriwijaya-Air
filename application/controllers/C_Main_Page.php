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
	function __construct(){
		parent::__construct();
		$this->load->model('FlightModel');
		$this->load->model('hotelmodel');
	}

	// function __construct(){
	// 	parent::__construct();
	// 	$this->load->model('hotelmodel');
	// }

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
		$table = 'hotel';
		$hasil =$this->hotelmodel->get_data($table);
		$data['data_ke_view']= $hasil;

		$this->load->view('daftar_hotel_admin',$data);
	}

	public function addHotel()
	{
		$this->load->view('tambah_hotel_admin');
	}

	public function addhoteldata()
	{
		$nama_hotel = $this->input->post('nama_hotel');
		// $cek_in = $this->input->post('cek_in');
		// $cek_out = $this->input->post('cek_out');
		$lokasi = $this->input->post('lokasi');
		$harga = $this->input->post('harga');

		$table = "hotel";
	
		$data_insert = array (
		  'nama_hotel' => $nama_hotel,
		  'harga' => $harga,
		  'lokasi' => $lokasi
		);
	
		$insert = $this->hotelmodel->input_data($table,$data_insert);
	
		if($insert){
		  $this->session->set_flashdata('alert', 'sukses_insert');
		  redirect(site_url('c_main_page/hoteladmin'));
		}else{
		  echo "<script>alert('Gagal Menambahkan Data');</script>";
		}

	}


	public function jadwal_penerbangan_admin()
	{
		$this->load->view('header');
    $table = 'penerbangan';
    $hasil =$this->FlightModel->get_data($table);
    $data['data_ke_view']= $hasil;
		$this->load->view('jadwal_penerbangan_admin',$data);
	}

	public function addFlight()
	{
		$this->load->view('tambah_penerbangan_admin');

	}
	public function addDataFlight()
	{
		$no_penerbangan = $this->input->post('no_penerbangan');
		$asal = $this->input->post('asal');
		$tujuan = $this->input->post('tujuan');
    $tgl_keberngkatan = $this->input->post('tgl_keberangkatan');
		$waktu_keberangkatan = $this->input->post('waktu_keberangkatan');
		$waktu_tiba = $this->input->post('waktu_tiba');
		$durasi = $this->input->post('durasi');
    $table = "penerbangan";

    $data_insert = array (
      'no_penerbangan' => $no_penerbangan,
      'asal' => $asal,
  	  'durasi' => $durasi,
		  'tujuan' => $tujuan,
	  	'STA' => $waktu_tiba,
	  	'STD' => $waktu_keberangkatan,
			'tanggal' => $tgl_keberngkatan
			// 'harga'=> $harga
    );

    $insert = $this->FlightModel->input_data($table,$data_insert);

    if($insert){
      $this->session->set_flashdata('alert', 'sukses_insert');
      redirect(site_url('c_main_page/jadwal_penerbangan_admin'));
    }else{
      echo "<script>alert('Gagal Menambahkan Data');</script>";
    }
	}
	public function edit_data($nim){
    $no_penerbangan = $this->input->post('no_penerbangan');
		$asal = $this->input->post('asal');
		$tujuan = $this->input->post('tujuan');
    $tgl_keberngkatan = $this->input->post('tgl_keberangkatan');
		$waktu_keberangkatan = $this->input->post('waktu_keberangkatan');
		$waktu_tiba = $this->input->post('waktu_tiba');
		$durasi = $this->input->post('durasi');
    $table = "penerbangan";

    $data_update = array (
      'nama' => $nama,
      'kelas' => $kelas,
      'jurusan' => $jurusan
    );
    $update = $this->BelajarModel->update_mahasiswa($table,$nim,$data_update);
    if($update){
      $this->session->set_flashdata('alert', 'sukses_update');
      redirect(site_url('BelajarController/lihat_data_view'));
    }else{
      echo "<script>alert('Gagal mengupdate Data');</script>";
    }
  }

}
