<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
	   $this->load->library('form_validation');
    }

    public function index()
    {
        $this->login();
    }

    public function login()
    {
        if ($this->session->userdata('log_admin')){
            redirect('.');
        } else {
            $this->load->view('auth');
        }
    }
    
    public function proses()
    {
        $this->load->model('M_auth');
		
        $username	= addslashes(trim($this->input->post('username')));
        $password	= addslashes(trim($this->input->post('password')));
        $row		= $this->M_auth->validasi($username, $password);

        if ($row != null){
            $this->session->set_userdata('log_admin', $row);
		  $this->session->set_flashdata('notif_login', 'Anda berhasil login kedalam sistem!');
            redirect('.', 'refresh');
        } else {
            $this->session->set_flashdata('notifikasi', 'Username atau password salah');
            redirect('auth', 'refresh');
        }
    }
	
     function logout()
    {
	   $this->session->sess_destroy();
	   $this->session->set_flashdata('notif_logout', 'Anda telah logout dari sistem!');
        redirect('login', 'refresh');
    }

	//  Forgot Password
    public function forgotPassword()
	{
		$this->load->model('M_Universal');
		if($_SERVER['REQUEST_METHOD']=='POST')
		{
			$this->form_validation->set_rules('email','Email','required');
			if($this->form_validation->run()==TRUE)
			{
				$email  = $this->input->post('email');
				$validateEmail = $this->M_Universal->validateEmail($email);
				if($validateEmail!=false)
				{
					$row = $validateEmail;
					$user_id = $row->user_id;

					$string = time().$user_id.$email;
					$hash_string = hash('sha256',$string);
					$currentDate = date('Y-m-d H:i');
					$hash_expiry = date('Y-m-d H:i',strtotime($currentDate. ' + 1 days'));
					$data = array(
						'hash_key' 	=> $hash_string,
						'hash_expiry' 	=> $hash_expiry,
					);

					
					$resetLink = base_url().'reset/password?hash='.$hash_string;
					$message = '<p>Your reset password Link is here:</p>'.$resetLink;
					$subject = "Password Reset link";
					$sentStatus = $this->sendEmail($email,$subject,$message);
					if($sentStatus==true)
					{
						$berhasil = $this->M_Universal->updatePasswordhash($data,$email);
						$this->session->set_flashdata('success','Reset password link successfully sent');
						redirect(base_url('auth/forgotPassword'));
					}
					else
					{
						$this->session->set_flashdata('error','Email sending error');
						$this->load->view('forgot_password');
					}
				}	
				else
				{
					$this->session->set_flashdata('error','invalid email id');
					$this->load->view('forgot_password');	
				}

			}
			else
			{
				$this->load->view('forgot_password');	
			}
		}
		else
		{
			$this->load->view('forgot_password');	
		}
	}
    
    /*user this email sending code */
	public function sendEmail($email,$subject,$message)
    {
    	/*This email configuration for sending email by Google Email(Gmail Acccount) from localhost */
	    $config = Array(
	      'protocol' => 'smtp',
	      'smtp_host' => 'ssl://smtp.googlemail.com',
	     
	      'smtp_port' => 465,
	      'smtp_user' => 'exampleEmail@gmail.com',  //gmail id
	      'smtp_pass' => '@@password',   //gmail password
	      
	      'mailtype' => 'html',
	      'charset' => 'iso-8859-1',
	      'wordwrap' => TRUE
	    	);

          $this->load->library('email', $config);
          $this->email->set_newline("\r\n");
          $this->email->from('noreply');
          $this->email->to($email);
          $this->email->subject($subject);
          $this->email->message($message);
          
          if($this->email->send())
         {
           return true;
         }
         else
         {
         	return false;
         }
    }

    	// ------------------------------------- Login User ------------------------------- //
// 	public function user()
//     {
//         if ($this->session->userdata('log_admin')){
//             redirect('.');
//         } else {
//             $this->load->view('login_user');
//         }
//     }

//      public function prosesLogin()
//     {
//         $this->load->model('M_auth');
		
//         $username	= addslashes(trim($this->input->post('username')));
//         $password	= addslashes(trim($this->input->post('password')));
//         $row		= $this->M_auth->validasi($username, $password);

//         if ($row != null){
//             $this->session->set_userdata('log_admin', $row);
// 		  $this->session->set_flashdata('notif_login', 'Anda berhasil login kedalam sistem!');
//             redirect('.', 'refresh');
//         } else {
//             $this->session->set_flashdata('notifikasi', 'Username atau password salah');
//             redirect('auth', 'refresh');
//         }
//     }

//     public function forgotPassword()
//     {
//         $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
//         if ($this->form_validation->run() == false) {
//             $this->load->view('auth/forgot_password');
//         }
//     }
}