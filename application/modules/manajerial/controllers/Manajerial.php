<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Manajerial extends MY_Controller {

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

    /**
     * [__construct description]
     *
     * @method __construct
     */
    public function __construct()
    {
        // Load the constructer from MY_Controller
        parent::__construct();
		$this->cek_login();
		$this->load->model('M_manajerial');
    }

    /**
     * [index description]
     *
     * @method index
     *
     * @return [type] [description]
     */
	public function meta()
	{
	  $data_user	= $this->M_Universal->getOne(["user_id" => $this->user_id], "user");
        $data = array(
			"judul"			=> "Jadwal",
			"keterangan"		=> "Contoh Keterangan",
			"halaman"			=> "manajerial",
			"view"			=> "manajerial",
			"data_manajemen"	=> $this->M_manajerial->get_manajerial(NULL, "manajerial"),
			"jml_data"		=> $this->M_manajerial->total_data("", "manajerial"),
			"data_edit"		=> $this->M_Universal->getMulti(["id_m" => dekrip(uri(3))], "manajerial"),
			"user"			=> $data_user,
	   );
	   return $data;
	}

	public function index()
	{
		$this->load->view('template', $this->meta());
	}

	// public function form()
	// {
	// 	$data_user	= $this->M_Universal->getOne(["user_id" => $this->user_id], "user");
	// 	$data = array(
	// 		"judul"		=> "Form Data",
	// 		"halaman"		=> "tambah_list",
	// 		"view"		=> "tambah_list",
	// 		"user"		=> $data_user
	// 	);
	// 	$this->load->view('template', $data, FALSE);
	// }

	public function edit() 
	{
		$data_user	= $this->M_Universal->getOne(["user_id" => $this->user_id], "user");
		$data = array(
			"judul"			=> "Halaman Edit",
			"halaman"			=> "edit_form",
			"view"			=> "edit_form",
			"data_edit"		=>  $this->M_Universal->getMulti(["id_m" => dekrip(uri(3))], "manajerial"),
			"user"			=> $data_user
		);
		$this->load->view('template', $data);
	}
	
	public function lihat()
	{
		$data_user	= $this->M_Universal->getOne(["user_id" => $this->user_id], "user");
		$data = array(
			"judul"			=> "Detail Data",
			"halaman"			=> "lihat_data",
			"view"			=> "lihat_data",
			"jml_berkas"		=> $this->M_manajerial->total_berkas("", "berkas"),
			"data_manajemen"	=> $this->M_manajerial->get_manajerial(["id_m" => dekrip(uri(3))], "manajerial"),
			"user"			=> $data_user
		);
		$this->load->view('template', $data);
	}

	//backend
	public function tambah()
	{
		$config['upload_path'] = './assets/upload/'; //path folder
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|doc|docx|xlsx|sql|mp4|zip|rar|exe'; //type yang dapat diakses bisa anda sesuaikan
		$config['encrypt_name'] = FALSE; //nama yang terupload nantinya

		$this->upload->initialize($config);

		if(!empty($_FILES['file_foto']['name']))
	            {
	                if ($this->upload->do_upload('file_foto'))
	                {
	                        $gbr = $this->upload->data();
	                        //Compress Image
	                        $config['image_library']='gd2';
	                        $config['source_image']='./assets/upload/'.$gbr['file_name'];
	                        $config['create_thumb']= FALSE;
	                        $config['maintain_ratio']= FALSE;
	                        $config['quality']= '100%';
						// $config['width']= 800;
						// $config['height']= 800;
	                        $config['new_image']= './assets/upload/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();

	                        $gambar=$gbr['file_name'];
							$data = array(
								"nama_apl"		=> $this->input->post("nama_apl"),
								"versi_apl"	   	=> $this->input->post("versi_apl"),
								"tgl_publish"		=> $this->input->post("tgl_publish"),
								"penyedia_apl"		=> $this->input->post("penyedia_apl"),
								"link_berkas"		=> $this->input->post("link_berkas"),
								"judul" 			=> $gambar
							);
								
							$tambah = $this->M_Universal->insert($data, "manajerial");

							if ($tambah){
								notifikasi_redirect("success", "Data berhasil ditambah", uri(1));
							} else {
								notifikasi_redirect("error", "Gagal menambah data", uri(1));
							};
  
	                }else{
					notifikasi_redirect("error", "Gagal menambah data", uri(1));
	                }           
	    }else{
								
		if ($tambah){
			notifikasi_redirect("success", "Data berhasil ditambah", uri(1));
			 $this->session->set_flashdata('notifikasi', 'Data berhasil ditambahkan!');
			 redirect(uri(1), 'refresh');
		} else {
			// notifikasi_redirect("error", "Gagal menambah data", uri(1));
			$this->session->set_flashdata('notifikasi', 'Username atau password salah!');
			 redirect(uri(1), 'refresh');
		};

	    }
	}
	
	public function update_manajerial()
	{
		$id_m	= dekrip($this->input->post("id_m"));
		
		$config['upload_path'] = './assets/upload/'; //path folder
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|doc|docx'; //type yang dapat diakses bisa anda sesuaikan
		$config['encrypt_name'] = FALSE; //nama yang terupload nantinya

		$this->upload->initialize($config);

		if(!empty($_FILES['file_foto']['name']))
	            {
	                if ($this->upload->do_upload('file_foto'))
	                {
	                        $gbr = $this->upload->data();
	                        //Compress Image
	                        $config['image_library']='gd2';
	                        $config['source_image']='./assets/upload/'.$gbr['file_name'];
	                        $config['create_thumb']= FALSE;
	                        $config['maintain_ratio']= FALSE;
	                        $config['quality']= '100%';
	                    //     $config['width']= 800;
	                    //     $config['height']= 800;
	                        $config['new_image']= './assets/upload/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();

	                        $gambar=$gbr['file_name'];

							$data = array(
								"nama_apl"		=> $this->input->post("nama_apl"),
								"versi_apl"		=> $this->input->post("versi_apl"),
								"tgl_publish"		=> $this->input->post("tgl_publish"),
								"penyedia_apl"		=> $this->input->post("penyedia_apl"),
								"link_berkas"		=> $this->input->post("link_berkas"),
								"judul" 			=> $gambar
							);
								
							$update = $this->M_Universal->update($data, ["id_m" => $id_m], "manajerial");

							if ($update){
								notifikasi_redirect("success", "Data berhasil diupdate", uri(1));
							} else {
								notifikasi_redirect("error", "Gagal mengupdate data", uri(1));
							};
  
	                } else{
					notifikasi_redirect("error", "Gagal mengupdate data", uri(1));
	                }           
	    }else{				
		if ($update){
			notifikasi_redirect("success", "Data berhasil diupdate", uri(1));
		} else {
			notifikasi_redirect("error", "Gagal mengupdate data", uri(1));
		};

	    }
	}
	
	public function hapus()
	{
		$hapus = $this->M_Universal->delete(["id_m" => dekrip(uri(3))], "manajerial");
		
		if ($hapus){
			notifikasi_redirect("success", "Berhasil menghapus data aplikasi", uri(1));
		} else {
			notifikasi_redirect("error", "Gagal menghapus data aplikasi", uri(1));
		};
	}

	// public function tambah_berkas()
	// {
	// 	$data_user	= $this->M_Universal->getOne(["user_id" => $this->user_id], "user");
	// 	$data = array(
	// 		"judul"			=> "Detail Data",
	// 		"halaman"			=> "tambah_berkas",
	// 		"view"			=> "tambah_berkas",
	// 		"data_edit"		=> $this->M_Universal->getMulti(["id_m" => dekrip(uri(3))], "manajerial"),
	// 		"user"			=> $data_user
	// 	);
	// 	$this->load->view('template', $data);
	// }

	public function download($id){
		$this->load->helper('download');
		$fileinfo = $this->M_berkas->download($id);
		$d = 'assets/upload/'.$fileinfo['judul'];
		force_download($d, NULL);
	 }

	public function export_manajerial()
	{
		$data	= array(
			"nama_apl"			=> $this->input->post("nama_aplikasi"),
			"versi_apl"			=> $this->input->post("versi_aplikasi"),
			"tgl_publish"		     => $this->input->post("tgl_aplikasi"),
			"penyedia_apl"		     => $this->input->post("penyedia_aplikasi"),
			"data_manajerial"		=> $this->M_manajerial->get_manajerial(NULL, "manajerial"),
		);
	  
		 $this->load->library('pdf');
		 $this->pdf->setPaper('A4', 'landscape');
		 $this->pdf->filename = "laporan-manajerial.pdf";
		 $this->pdf->load_view('laporan_manajerial_pdf', $data);
	}
}