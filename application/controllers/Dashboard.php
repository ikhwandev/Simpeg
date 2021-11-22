<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	private $m_dashboard;

	function __construct() {
		parent::__construct();
		$this->load->model('M_Dashboard');
		$this->m_dashboard = $this->M_Dashboard;
		isnt_login(function() {
			redirect( base_url('auth/login') );
		});
	}

	public function index() {
		switch ( $this->session->userdata('user_type') ) {
			case 'admin':
				$data = generate_page('Dashboard', 'dashboard', 'Admin');

					$data_content['total_admin'] = $this->m_dashboard->total_admin();
					$data_content['total_dataizin'] = $this->m_dashboard->total_dataizin();
					$data_content['total_izinterkonfirmasi'] = $this->m_dashboard->total_izinterkonfirmasi();
					$data_content['total_pegawai'] = $this->m_dashboard->total_pegawai();
				$data['content'] = $this->load->view('partial/Dashboard/Admin', $data_content, true);
				$this->load->view('V_Dashboard', $data);
				break;
			case 'sekcam':
				$data = generate_page('Dashboard', 'dashboard', 'SEKCAM');

					$data_content['sekcam_total_izincuti'] = $this->m_dashboard->sekcam_total_izincuti();
					$data_content['sekcam_izin_terkonfirmasi'] = $this->m_dashboard->sekcam_izin_terkonfirmasi();
				$data['content'] = $this->load->view('partial/Dashboard/SEKCAM', $data_content, true);
				$this->load->view('V_Dashboard', $data);
				break;
			case 'pegawai':
				$data = generate_page('Dashboard', 'dashboard', 'Pegawai');

					$data_content['pegawai_total_izincuti'] = $this->m_dashboard->pegawai_total_izincuti();
					$data_content['pegawai_izin_terkonfirmasi'] = $this->m_dashboard->pegawai_izin_terkonfirmasi();
				$data['content'] = $this->load->view('partial/Dashboard/Pegawai', $data_content, true);
				$this->load->view('V_Dashboard', $data);
				break;
			
			default:
				# code...
				break;
		}
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */