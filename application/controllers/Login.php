<?php
    class Login extends CI_Controller {
        
        function __construct() {
            
            parent::__construct();
            
            $this->load->model('m_login');
            $this->load->library('form_validation');
        }
        
        function index() {
            $this->load->view('v_login');
        }
        
        function do_login() {
            //get input
            $username = $this->input->post('username');
            $password = $this->input->post('password');
           // $role = $this->input->post('role');
            
            $this->form_validation->set_rules('username','Username','required');
            $this->form_validation->set_rules('password','Password','required');        
            //where databasenya
            $this->form_validation->run();
            $this->load->view('v_login');
            //where databasenya
            $where = array(
                'username' => $username,
                'password' => md5($password),
                //'role' => $role
            );
            
            //load validasi dari model
            $val = $this->m_login->login_validation('admin', $where)->num_rows();
            
            //validasi
            if ($val > 0) {
                $data_session = array(
                    'nama' => $username,
                    'status' => 'login',
                  //  'role' => $role
                );
                
                $this->session->set_userdata($data_session);
                redirect('sekolah');
                
            } 
        }
        
        function logout(){
	           $this->session->sess_destroy();
	           redirect(base_url('home'));
        }			
        
        function signUpView() {
            $this->load->view('v_signUp');
        }
        
        function signUp() {
            //input data
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            
            //arraydata
            $data = array(
                'username' => $username,
                'password' => md5($password), 
            );
            
            //load modelnya
            $this->m_login->signUp($data, 'admin');
            redirect(base_url('login'));
        }
        
        function do_login_siswa() {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            
            $where = array(
                'username' => $username,
                'password' => $password
            
            );
            
            //load validasi dari model
            $val = $this->m_login->login_validation('akun_siswa', $where)->num_rows();
            
            if ($val > 0) {
                $data_session = array(
                    'nama' => $username,
                    'status' => 'login_siswa'
                );
                
                $this->session->set_userdata($data_session);
                redirect('home/v_akunSiswa');
            }
        }
        
        function signUpSiswa() {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $id_siswa = $this->input->post('id_siswa');
            
            $data = array(
                'username' => $username,
                'password' => $password,
                'id_siswa' => $id_siswa
            );
            
            $this->m_login->signUp($data, 'akun_siswa');
            redirect(base_url('home'));
        }
        
        function v_signUpSiswa() {
            $this->load->view('v_signUpSiswa');
        }
        
    }

?>