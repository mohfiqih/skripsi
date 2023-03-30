<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dasbor extends MY_Controller {

    public function __construct()
    {
        // Load the constructer from MY_Controller
        parent::__construct();
		$this->cek_login();
		$this->load->model('M_dasbor');
    }

	public function meta()
	{
	  $data_user	= $this->M_Universal->getOne(["user_id" => $this->user_id], "user");
	  $data_paket	= $this->M_Universal->getMulti(NULL, "paket_soal");

        $data = array(
			"judul"			=> "Dashboard",
			"keterangan"		=> "Contoh Keterangan",
			"halaman"			=> "dasboard",
			"view"			=> "dasboard",
			
			// Jumlah Data Setiap Card Menu
			"jml_user"		=> $this->M_dasbor->total_user("", "user"),
			"jml_berkas"		=> $this->M_dasbor->total_berkas("", "manajerial"),
			"jml_apl"			=> $this->M_dasbor->total_aplikasi("", "manajerial"),
			
			"jml_paket"		=> $this->M_dasbor->total_paket(NULL, "paket_soal"),
			"jml_soal"		=> $this->M_dasbor->total_soal_dashboard(NULL, "daftar_soal"),

			// Grafik Pie & Total Responden Berdasarkan Kategori Responden
			"jml_dosen"		=> $this->M_dasbor->total_dosen(NULL, "kuesioner"),
			"jml_mahasiswa"	=> $this->M_dasbor->total_mahasiswa(NULL, "kuesioner"),
			// "jml_karyawan"		=> $this->M_dasbor->total_karyawan(NULL, "responden"),
			// "jml_staf"		=> $this->M_dasbor->total_staf(NULL, "responden"),
			// "data_pie"		=> $this->M_dasbor->grafik_pie(NULL, "responden"),
			"data_paket"		=> $this->M_Universal->getMulti(["id_paket"], "paket_soal"),
			"data_pertanyaan"	=> $this->M_Universal->getMulti(["id_paket"], "paket_soal"),
			
			// "jml_dosen"		=> $this->M_dasbor->total_dosen(NULL, "responden"),
			// "data_pie"		=> $this->M_dasbor->grafik_pie(NULL, "responden"),
			// "data_pertanyaan"	=> $this->M_Universal->getMulti(["id_paket"], "paket_soal"),
			"user"			=> $data_user,
			"paket"			=> $data_paket
	   );
	   return $data;
	}

	public function index()
	{
		$this->load->view('template', $this->meta());
	}
}