<?php defined('BASEPATH') or exit('No direct script access allowed');

class Report extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->cek_login();
		$this->load->model('M_report', 'report');
		// $this->load->library('session');
		// $this->load->helper('url');
	}

     public function meta()
	{
		$data_user	= $this->M_Universal->getOne(["user_id" => $this->user_id], "user");
		$data = array(
			"judul"			=> "Hasil Kuesioner",
			"halaman"			=> "folder_hasil_kuesioner/hasil_kuesioner",
			"view"			=> "folder_hasil_kuesioner/hasil_kuesioner",
			"data_paket"		=> $this->M_Universal->getMulti(NULL, "paket_soal"),
			"user"			=> $data_user
		);

		return $data;
	}

	public function index()
	{
		$this->load->view('template', $this->meta());
	}

	public function data_responden()
	{
		$data_user			= $this->M_Universal->getOne(["user_id" => $this->user_id], "user");
		$total_responden		= "paket_id_responden='" . dekrip(uri(3)) . "' ";
		$total_soal			= "id_paket_jawaban='" . dekrip(uri(3)) . "' ";
		// Menarik id paket
		$total_id				= "id_paket_jawaban='" . dekrip(uri(3)) . "' ";

		$data = array(
			"judul"			=> "Data Kuesioner",
			"halaman"			=> "folder_hasil_kuesioner/data_responden",
			"view"			=> "folder_hasil_kuesioner/data_responden",
			// Menarik Data paket berdasarkan id_paket
			"data_paket"		=> $this->M_Universal->getMulti(["id_paket" => dekrip(uri(3))], "paket_soal"),
			// Menarik Data identitas responden berdasarkan id_paket 
			// "data_kuesioner"	=> $this->M_Universal->getMulti(["id_identitas" => dekrip(uri(3))], "jawaban"),
			// "data_identitas"	=> $this->report->get_jawaban(["responden.paket_id_responden" => dekrip(uri(3))]),
			"data_identitas"	=>  $this->report->get_kuesioner(["kuesioner.id_paket_jawaban" => dekrip(uri(3))]),

			// Menghitung total Responden yg Menjawab berdasarkan id_paket
			// "total_responden"	=> $this->report->total_responden($total_responden),

			// Menghitung total Jumlah Jawaban dari responden berdasarkkan id_paket
			// "total_soal"		=> $this->report->total_soal($total_soal),
			"user"			=> $data_user
		);

		$this->load->view('template', $data);
		// var_dump($total_ss_p);
	}

	public function hapus()
	{
		$hapus = $this->M_Universal->delete(["id_identitas" => dekrip(uri(3))], "kuesioner");

		if ($hapus) {
			notifikasi_redirect("success", "Hapus data berhasil", redirect('report'));
		} else {
			notifikasi_redirect("error", "Hapus data gagal", redirect('report'));
		};
	}

	public function lihat_responden()
	{
		$data_user	= $this->M_Universal->getOne(["user_id" => $this->user_id], "user");
		$data = array(
			"judul"					=> "Detail Data",
			"halaman"					=> "folder_hasil_kuesioner/lihat_responden",
			"view"					=> "folder_hasil_kuesioner/lihat_responden",
			"data_identitas"			=> $this->report->getMulti_jawaban(["id_identitas" => dekrip(uri(3))], "kuesioner"),
			"data_kuesioner"			=> $this->report->get_soal_jawaban([
				"kuesioner.id_identitas" => dekrip(uri(3)),
				"id_paket_jawaban"		=> dekrip(uri(4))
			]),
			"user"						=> $data_user
		);
		$this->load->view('template', $data);
	}

	public function kuesioner()
	{
		$data_user	= $this->M_Universal->getOne(["user_id" => $this->user_id], "user");
		$data = array(
			"judul"			=> "Hasil Kuesioner",
			"halaman"			=> "folder_hasil_kuesioner/hasil_kuesioner",
			"view"			=> "folder_hasil_kuesioner/hasil_kuesioner",
			"data_paket"		=> $this->M_Universal->getMulti(NULL, "paket_soal"),
			"user"				=> $data_user
		);
		$this->load->view('template', $data);
	}

	public function all()
	{
		$total_soal			= "id_paket_jawaban='" . dekrip(uri(3)) . "' ";
		$data_user	= $this->M_Universal->getOne(["user_id" => $this->user_id], "user");
		$data = array(
			"judul"			=> "Hasil Kuesioner",
			"halaman"			=> "folder_hasil_kuesioner/all_kuesioner",
			"view"			=> "folder_hasil_kuesioner/all_kuesioner",
			// "data_paket"		=> $this->M_Universal->getMulti(NULL, "paket_soal"),
			// "data_jawaban"		=> $this->M_Universal->getMulti(NULL, "jawaban"),
			"data_klasifikasi"	=> $this->M_Universal->getMulti(NULL, "klasifikasi"),
			// "total_soal"		=> $this->report->total_soal($total_soal),
			"user"			=> $data_user
		);
		$this->load->view('template', $data);
	}

	public function jawaban_id()
	{
		$data_user	= $this->M_Universal->getOne(["user_id" => $this->user_id], "user");
		$data = array(
			"judul"			=> "Hasil Kuesioner",
			"halaman"			=> "folder_hasil_kuesioner/jawaban_id",
			"view"			=> "folder_hasil_kuesioner/jawaban_id",
			"data_paket"		=> $this->M_Universal->getMulti(NULL, "paket_soal"),
			"data_jawaban"		=>  $this->report->get_kuesioner(["kuesioner.id_paket_jawaban" => dekrip(uri(3))]),
			// "data_jawaban"		=> $this->M_Universal->getMulti(NULL, "kuesioner"),
			"user"			=> $data_user
		);
		$this->load->view('template', $data);
	}

	public function hasil_kuesioner_pdf()
	{
		$total_responden		= "paket_id_responden='" . dekrip(uri(3)) . "' ";
		$total_soal				= "id_paket_jawaban='" . dekrip(uri(3)) . "' ";
		// Menarik id paket
		$total_id				= "id_paket_jawaban='" . dekrip(uri(3)) . "' ";

		$data = array(
			"judul"				=> "Data Kuesioner",
			"halaman"			=> "data_responden",
			"view"				=> "data_responden",
			// Menarik Data paket berdasarkan id_paket
			"data_paket"		=> $this->M_Universal->getMulti(["id_paket" => dekrip(uri(3))], "paket_soal"),
			// Menarik Data identitas responden berdasarkan id_paket 
			"data_kuesioner"	=> $this->M_Universal->getMulti(["id_identitas" => dekrip(uri(3))], "jawaban"),
			"data_identitas"	=> $this->report->get_jawaban(["responden.paket_id_responden" => dekrip(uri(3))]),

			// Menghitung total Responden yg Menjawab berdasarkan id_paket
			"total_responden"	=> $this->report->total_responden($total_responden),

			// Menghitung total Jumlah Jawaban dari responden berdasarkkan id_paket
			"total_soal"		=> $this->report->total_soal($total_soal),
		);
	  
		 $this->load->library('pdf');
		 $this->pdf->setPaper('A4', 'potrait');
		 $this->pdf->filename = "laporan-hasil-kuesioner.pdf";
		 $this->pdf->load_view('folder_hasil_kuesioner/export_hasil_kuesioner', $data);
	}	

}