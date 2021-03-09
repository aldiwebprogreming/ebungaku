<?php 

	/**
	 * 
	 */
	class Ebunga extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
		}



		function index(){

			$data['title'] = 'ebunga';

			$data['kelurahan'] = $this->db->get('tbl_kelurahan')->result_array();
			$this->load->view('template/header');
			$this->load->view('ebunga/home', $data);
			$this->load->view('template/footer');
		}

		function product(){


			$kel = $this->input->post('kelurahan');

			$code = $this->db->get_where('tbl_kelurahan', array('nama' => $kel))->result_array();
			foreach ($code as $kelurahan) {
			}

			
			$id_kec = $kelurahan['id_kec'];


			$code2 = $this->db->get_where('tbl_kecamatan',array('id_kec' => $id_kec))->result_array();
			foreach ($code2 as $kec) {
			}
			
			$id_kab = $kec['id_kab'];

			$code3 = $this->db->get_where('tbl_kabupaten',array('id_kab' => $id_kab))->result_array();
			foreach ($code3 as $kab) {
			}

			
			$id_prov = $kab['id_prov'];

			$code4 = $this->db->get_where('tbl_provinsi',array('id_prov' => $id_prov))->result_array();
			foreach ($code4 as $prov) {
			}


			$data['kel'] = $kel;
			$data['kec']  = $kec['nama'];
			$data['kab']  = $kab['nama'];
			$data['prov'] = $prov['nama'];



				$this->load->view('template/header');
				$this->load->view('ebunga/product', $data);
				$this->load->view('template/footer');

		}



	}

 ?>