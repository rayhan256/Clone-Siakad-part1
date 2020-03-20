<?php
    class Home extends CI_Controller {
        
        function __construct() {
            parent::__construct();
            $this->load->helper('url');
        }
        
        function index() {
            $this->load->view('v_userHome');
        }
        
        function admin() {
            $this->load->view('v_home');
        }
        
        function pageNotFound() {
            $this->load->view('v_notFound');
        }
        
        function about() {
            $this->load->view('v_about');
        }
        
        function v_akunSiswa() {
            if ($this->session->userdata('status') != 'login_siswa') {
                redirect(base_url('home'));
            }
            $this->load->view('v_akunSiswa');
        }
    }
?>
