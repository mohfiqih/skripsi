<?php
defined('BASEPATH') or exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailerAutoload;

// require 'vendor/phpmailler/src/Exception.php';
// require 'vendor/phpmailler/src/PHPMailer.php';
// require 'vendor/phpmailler/src/SMTP.php';
// require 'vendor/phpmailler/class.phpmailer.php';
// require 'vendor/phpmailler/PHPMailerAutoload.php';

class Auth extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
	   $this->load->library('form_validation');
	   $this->load->model('M_auth');
	   $this->load->library('session');
        $this->load->helper('form');
	   $this->load->helper('email');
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

//     public function forgotPassword()
//     {
// 	$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
// 	$this->session->userdata('log_admin');
// 	if ($this->form_validation->run() == false) {
// 		$this->load->view('forgot_password');
// 	} else {
// 		$email = $this->input->post('email');
// 		$user = $this->db->get_where('user', ['email' => $email, 'user_status' => 1])->row_array();

// 		if($user) {
// 			$token = base64_encode(random_bytes(32));
// 			$user_token = [
// 				'email'=>$email,
// 				'token'=>$token,
// 				'user_created'=>time()	
// 			];

// 			$this->db->insert('user_token', $user_token);
// 			$this->_sendEmail($token,'forgot');
			
// 			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Please check yout email to reset your password!</div>');
// 			redirect('auth/forgotPassword');
// 			die;

// 		} else {
// 			 $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not registered or activated</div>');
// 			 redirect('auth/forgotPassword');
// 			 die;
// 		}
// 	}
//     }

//     	public function _sendEmail($token,$type)
//     {
// 	    $config = [
// 	      'protocol' => 'smtp',
// 	      'smtp_host' => 'ssl://smtp.googlemail.com',
// 		 'smtp_user' => 'adminsisfo@gmail.com',
// 		 'smtp_pass' => '1234578',
// 		 'smtp_port' => 465,
// 		 'mailtype'  => 'html',
// 		 'charset'   => 'utf-8',
// 		 'newline'   => "\r\n"
// 	    ];

//           $this->email->initialize($config);

// 		$this->email->from('adminsisfo@gmail.com', 'Moh. Fiqih Erinsyah');
// 		$this->email->to($this->input->post('email'));

// 		if ($type == 'verify') {
// 			$this->email->subject('Account Verification');
// 			$this->email->message('Click this link to verify you account : <a href="'. base_url() . 'auth/verify?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '")>Activate</a>');
// 		} else if ($type == 'forgot') {
// 			$this->email->subject('Reset Password');
// 			$this->email->message('Click this link to reset you account : <a href="'. base_url() . 'auth/resetPassword?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '")>Reset Password</a>');
// 		}
		
// 		if ($this->email->send()) {
// 			return true;
// 		} else {
// 			echo $this->email->print_debugger();
// 			die;
// 		}
//     }

    
	//  Forgot Password
    public function forgotPassword()
	{
		$this->load->model('M_auth');
		if($_SERVER['REQUEST_METHOD']=='POST')
		{
			$this->form_validation->set_rules('email','Email','required');
			if($this->form_validation->run()==TRUE)
			{
				$email_send  = $this->input->post('email');
				$validateEmail = $this->M_auth->validateEmail($email_send);
				if($validateEmail!=false)
				{
					$row = $validateEmail;
					$id = $row->user_id;

					$string = time().$id.$email_send;
					$hash_string = password_hash($string, PASSWORD_BCRYPT);
					$currentDate = date('Y-m-d H:i');
					$hash_expiry = date('Y-m-d H:i',strtotime($currentDate. ' + 1 days'));
					$data = array(
						'hash_key'=>$hash_string,
						'hash_expiry'=>$hash_expiry,
					);
					
					$resetLink = base_url().'auth/password?hash='.$hash_string;
					$message = 'Your reset password Link is here: '.$resetLink;
					$subject = "Password Reset link";
					$sentStatus = $this->sendEmail($email_send,$subject,$message);
					
					if($sentStatus==TRUE) {
						$this->M_auth->updatePasswordhash($data,$email_send);
						$this->session->set_flashdata('success','Reset password berhasil dikirim ke email!');
						redirect(base_url('forgotPassword'));
					} else {
						$this->session->set_flashdata('error','Gagal kirim email!');
						redirect(base_url('forgotPassword'));
						// var_dump($sentStatus);
						// var_dump($resetLink);
					}
				} else {
					$this->session->set_flashdata('error','Tidak ada email tersebut!');
					redirect(base_url('forgotPassword'));
				}

			} else {
				$this->load->view('forgot_password');	
			}
		} else {
			$this->load->view('forgot_password');	
		}
	}

	public function sendEmail($email_send,$subject,$message)
    {

    	/*This email configuration for sending email by Google Email(Gmail Acccount) from localhost */
	    $config = Array(
	      'protocol' => 'smtp',
	      'smtp_server' => 'smtp.gmail.com',
	     
	      'smtp_port' => 465,
	      'auth_username' => 'mfiqiherinsyah90@gmail.com',  //gmail id
	      'auth_password' => 'agbpxdfoibccylit',   //gmail password
	      
	      'mailtype' => 'html',
	      'charset' => 'iso-8859-1',
	      'wordwrap' => TRUE
	    	);

          $this->load->library('email', $config);
          $this->email->set_newline("\r\n");
          $this->email->from('smtp_user');
          $this->email->to($email_send);
          $this->email->subject($subject);
          $this->email->message($message);
          
          if($this->email->send())
         {
           return true;
         }
         else
         {
         	// return false;
		echo $this->email->print_debugger();
		die;
         }
    }

    public function password()
	{
		if($this->input->get('hash'))
		{
			$hash = $this->input->get('hash');
			$this->data['hash']=$hash;
			$getHashDetails = $this->M_auth->getHahsDetails($hash);
			if($getHashDetails!=false)
			{
				$hash_expiry = $getHashDetails->hash_expiry;
				$currentDate = date('Y-m-d H:i');
				if($currentDate < $hash_expiry)
				{
					if($_SERVER['REQUEST_METHOD']=='POST')
					{
						$this->form_validation->set_rules('currentPassword','Current Password','required');
						$this->form_validation->set_rules('user_password','New Password','required');
						$this->form_validation->set_rules('cpassword','Confirm New Password','required|matches[user_password]');
						if($this->form_validation->run()==TRUE)
						{
							$currentPassword = password_hash($this->input->post('currentPassword'));
							$newPassword = $this->input->post('user_password');

							$validateCurrentPassword = $this->M_auth->validateCurrentPassword($currentPassword,$hash);
							if($newPassword!=FALSE)
							{
								 $newPassword = password_hash($newPassword, PASSWORD_BCRYPT);
								 $data = array(
								 	'user_password'=>$newPassword,
								 	'hash_key'=>null,
								 	'hash_expiry'=>null
								);
								 $this->M_auth->updateNewPassword($data,$hash);
								 $this->session->set_flashdata('success','Successfully changed Password');
								 redirect(base_url('auth'));
							}
							else
							{
								$this->session->set_flashdata('error','Current Password is wrong');
								$this->load->view('reset_password',$this->data);	
							}
						} else {
							$this->load->view('reset_password',$this->data);	
						}
					} else {
						$this->load->view('reset_password',$this->data);
					}
				}
				else
				{
					$this->session->set_flashdata('error','link is expired');
					redirect(base_url('auth/forgotPassword'));
				}
			}
			else
			{
				echo 'invalid link';exit;
			}
		}
		else
		{
			redirect(base_url('auth/forgotPassword'));
		}
	}

//   ------------------------------------- Login User ------------------------------- //
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