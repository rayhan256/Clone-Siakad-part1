<?php
    class Find extends CI_Controller {
        
        function __construct() {
            parent::__construct();
            $this->load->model('m_search');
            
            if ($this->session->userdata('status') != 'login') {
                redirect(base_url('home'));
            }
        }
        
        function index() {
            /*
            $data['siswa'] = $this->m_search->view();
            $this->load->view('v_header');
            $this->load->view('v_footer');
            $this->load->view('v_find', $data);
            */
            
            $this->load->model('m_sekolah');
             $keyword = $this->input->post('keyword');
            if(isset($keyword)) {
               
                
                $data['siswa'] = $this->m_sekolah->cari_data($keyword)->result();
                $this->load->view('v_header');
                $this->load->view('v_footer');
                $this->load->view('v_find', $data);
            } else {
                $data['siswa'] = $this->m_sekolah->tampil_data()->result();
                $this->load->view('v_header');
                $this->load->view('v_footer');
                $this->load->view('v_find', $data);
            }
        }
        
        function search() {
            //ambil inputannya
            /*
            $keyword = $this->input->post('keyword');
            $siswa = $this->m_search->search($keyword);
            
            $hasil = $this->load->view('view', array('siswa' => $siswa), true);
            
            //buat callbacknya
            $callback = array('hasil' => $hasil);
            
            echo json_encode($callback);
            */
            
        }
    }
?>
