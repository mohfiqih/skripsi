<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Link_kuesioner extends MY_Controller {

    public function __construct()
    {
        // Load the constructer from MY_Controller
        parent::__construct();
		$this->cek_login();
		// $this->load->model('M_Link');
    }

    public function meta()
	{
	  $data_user	= $this->M_Universal->getOne(["user_id" => $this->user_id], "user");
        $data = array(
			"judul"			=> "Link",
			"keterangan"		=> "Link",
			"halaman"			=> "Link Kuesioner",
			"view"			=> "link",
			"data_paket"		=> $this->M_Universal->getMulti(NULL, "paket_soal"),
			"user"			=> $data_user,
	   );
	   return $data;
	}

	public function index()
	{
		$this->load->view('template', $this->meta());
	}

	public function export_link()
	{
		$data	= array(
			"data_paket"		=> $this->M_Universal->getMulti(NULL, "paket_soal"),
		);
	  
		 $this->load->library('pdf');
		 $this->pdf->setPaper('A4', 'landscape');
		 $this->pdf->filename = "link-kuesioner.pdf";
		 $this->pdf->load_view('export_link', $data);
	}
}