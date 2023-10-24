<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('M_login','login',TRUE);
    }
    
    public function index(){
      $this->load->view('login', FALSE);
  }

	// cek login
  public function auth(){
    $username = htmlspecialchars($this->input->post('username', TRUE), ENT_QUOTES);
    $level    = htmlspecialchars($this->input->post('level', TRUE), ENT_QUOTES);
    $password = htmlspecialchars($this->input->post('password', TRUE), ENT_QUOTES);


    if ($level == 1 || $level == 2 || $level == 3 || $level == 4 ) { 
        $cek_user    = $this->login->auth_user($username, $level, $password);
    } else {
        pesan('alert', "danger", "Username dan password salah");
        redirect('login');
    }

        if ($cek_user->num_rows() > 0) { //cek data user, jika ada
            $data = $cek_user->row_array();

            //bentuk session
            $data_session = array(
                'oklog' => TRUE,
                'ses_id' => $data['id_user'],
                'akses'  => $level,
                'nama' => $data['username'],
            );
            $this->session->set_userdata($data_session);

            if($level == 1 || $level == 2 || $level == 3 || $level == 4){
             redirect('dashboard');
         }
         else{ redirect('login');}
     } else {
        pesan('alert', "danger", "Username dan password salah");
        redirect('login');
    }
}

    // logout
public function logout()
{
    $this->session->sess_destroy();
    $url = base_url();
    redirect($url);
}



}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */