<?php defined('BASEPATH') or exit('No direct script access allowed');


class Kuesioner extends MY_Controller
{
	public function __construct()
	{
		// Load the constructer from MY_Controller
		parent::__construct();
		$this->cek_login();
	}

	public function meta()
	{
	   $data_user	= $this->M_Universal->getOne(["user_id" => $this->user_id], "user");
        $data = array(
			"judul"		=> "Bank Berkas",
			"keterangan"	=> "Contoh Keterangan",
			"halaman"		=> "kuesioner",
			"view"		=> "kuesioner",
			"data_soal"	=> $this->M_Universal->get_soal_kuesioner(["daftar_soal.paket_id" => dekrip(uri(3))]),
			"data_paket"	=> $this->M_Universal->getMulti(["id_paket" => dekrip(uri(3))], "paket_soal"),
			"user"		=> $data_user,
	   );
		return $data;
	}

	public function index()
	{
		$this->load->view('template', $this->meta());
	}
	
	# New Coding
	public function tambah_soal()
	{
		$this->db->order_by('id_soal', 'asc');
		$id_soal 		= $this->db->get_where('daftar_soal', array('paket_id'=> $this->input->post("id_paket_jawaban")));
		$type_soal 	= $this->db->get_where('daftar_soal', array('type_soal'=> $this->input->post("type_soal")));
		// $id_paket		= "id_paket_jawaban='" . dekrip(uri(3)) . "' ";

		$data= [];
		foreach ($id_soal->result() as $row) {

			$data[] = array(
				"id_identitas"			=> $this->input->post("id_identitas"),
				"nama_lengkap"			=> $this->input->post("nama_lengkap"),
				"prodi"				=> $this->input->post("prodi"),
				"sebagai"				=> $this->input->post("sebagai"),
				"gender"				=> $this->input->post("gender"),
				"id_paket_jawaban"		=> $this->input->post("id_paket_jawaban"),
				"id_soal_kuesioner"		=> $row->id_soal,
				"type_soal"			=> $row->type_soal,
				"jawaban"				=> $this->input->post("jawaban" .$row->id_soal),
				"datecreated"			=> $this->input->post("datecreated"),
			);
		}
		// var_dump($data);

		$tambah = $this->db->insert_batch('kuesioner', $data);

		if ($tambah) {
			notifikasi_redirect("success", "Data berhasil", redirect(base_url('kuesioner/klasifikasi/' . uri(3))));
		} else {
			notifikasi_redirect("error", "Data sudah ada", redirect('kuesioner/index/' . uri(3)));
		};
	}

	public function klasifikasi()
	{
		$data_user	= $this->M_Universal->getOne(["user_id" => $this->user_id], "user");
		$data = array(
			"judul"		=> "Halaman Kuesioner",
			"halaman"		=> "klasifikasi",
			"view"		=> "klasifikasi",
			"data_soal"	=> $this->M_Universal->get_soal_kuesioner(["daftar_soal.paket_id" => dekrip(uri(3))]),
			"user"		=> $data_user,
		);

		$this->load->view('template', $data);
	}

	public function terimakasih()
	{
		$data = array(
			"judul"			=> "Halaman Kuesioner",
			"halaman"			=> "end",
			"view"			=> "end",
		);

		$this->load->view('end', $data);
	}

	// public function index()
	// {
	// 	$id= $this->input->get('id');
	// 	$data = array(
	// 		"judul"		=> "Halaman Kuesioner",
	// 		"halaman"		=> "form_identitas",
	// 		"view"		=> "form_identitas",
	// 		"data_soal"	=> $this->M_Universal->get_soal_kuesioner(["daftar_soal.paket_id" => dekrip(uri(3))]),
	// 		"data_paket"	=> $this->M_Universal->getMulti(["id_paket" => dekrip(uri(3))], "paket_soal"),
	// 	);

	// 	$this->load->view('identitas', $data);
	// }

	// public function tambah()
	// {
	// 	$id =  $this->input->post("id_identitas");
	// 	$data = array(
	// 		"id_identitas"			=> $this->input->post("id_identitas"),
	// 		"paket_id_responden"	=> dekrip(uri(3)),
	// 		"nama_lengkap"			=> $this->input->post("nama_lengkap"),
	// 		"sebagai"				=> $this->input->post("sebagai"),
	// 		"gender"				=> $this->input->post("gender"),
	// 	);

	// 	$tambah = $this->M_Universal->insert($data, "responden");
	// 	if ($tambah) {
	// 		redirect(base_url('kuesioner/soal/'). uri(3).'?id='.$id);
			
	// 	}
	// }

	// public function soal()
	// {
	// 	$id= $this->input->get('id');
	// 	$data = array(
	// 		"judul"		=> "Halaman Kuesioner",
	// 		"halaman"		=> "soal",
	// 		"view"		=> "soal",
	// 		"data_soal"	=> $this->M_Universal->get_soal_kuesioner(["daftar_soal.paket_id" => dekrip(uri(3)),"id_identitas" => $id]),
	// 		// "data_paket"	=> $this->M_Universal->getMulti(["id_paket" => dekrip(uri(3))], "paket_soal"),
	// 	);

	// 	$this->load->view('soal', $data);
	// }

	// public function tambah_soal()
	// {
	// 	// $dataset 	= new CsvDataset('../dataset/dataclean_TA.csv', 2, true);
		
	// 	// $samples 	= $dataset->getSamples();
	// 	// $label 	= $dataset->getTargets();

	// 	// $dtesting[] 	= $_POST['ulasan'];
	// 	// $dtesting[] 	= $_POST['label'];

	// 	// $class_hasil 	= "";
	// 	// $classifier = new NaiveBayes();

	// 	// $classifier->train($samples, $label);
	// 	// $class_hasil = $classifier->predict($dtesting);
	// 	// $class_hasil = $this->input->post("klasifikasi", $classifier->predict($dtesting));
		

	// 	$this->db->order_by('id_soal', 'asc');
	// 	$id_soal 		= $this->db->get_where('daftar_soal', array('paket_id'=> $this->input->post("id_paket_jawaban")));
		
	// 	$data= [];
	// 	foreach ($id_soal->result() as $row) {
	// 		$jawaban 	= $this->input->post("jawaban" .$row->id_soal);

	// 		// $ulasan	= $_POST['ulasan'];
	// 		// $label		= $_POST['label'];
			
	// 		// $command 	= escapeshellcmd("python ../dataset/pythonFile.py $ulasan $label");
	// 		// $klasifikasi = shell_exec($command);

	// 		$data[] = array(
	// 			"id_respon"		=> $this->input->post("id_respon"),
	// 			"id_identitas"		=> $this->input->post("id_identitas"),
	// 			"id_paket_jawaban"	=> $this->input->post("id_paket_jawaban"),
	// 			"id_soal_jawaban"	=> $row->id_soal,
	// 			"jawaban"			=> $jawaban,
	// 			"klasifikasi"		=> $this->input->post("klasifikasi"),
	// 			"tanggal"			=> $this->input->post("tanggal"),
	// 			// "klasifikasi"		=> $class_hasil
	// 		);
	// 	}
	// 	// var_dump($data);

	// 	$tambah = $this->db->insert_batch('jawaban', $data);

	// 	if ($tambah) {
	// 		notifikasi_redirect("success", "Hapus data berhasil", redirect('kuesioner/terimakasih'));
	// 	} else {
	// 		notifikasi_redirect("error", "Data sudah ada", redirect('kuesioner/soal'));
	// 	};
	// }
}

	