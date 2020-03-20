<?php
    class Sekolah extends CI_Controller {
         function __construct () {
            //selalu deklarasikan parent construct
            parent::__construct();
            
            //load model
            $this->load->model('m_sekolah');
            //load helper
            $this->load->helper('url');
             if ($this->session->userdata('status') != 'login') {
                redirect(base_url('home'));
            }
        }
        
        function index() {
            //deklarasi data
            $data['siswa'] = $this->m_sekolah->tampil_data()->result();
            $this->load->view('v_header');
            $this->load->view('v_footer');
            $this->load->view('v_sekolah',$data);
        }
        
        function add() {
            $this->load->view('v_tambah');
        }
        
        function tambah_data() {
            //deklarasi hasil inputan
            $nama = $this->input->post('nama');
            $alamat = $this->input->post('alamat');
            $umur = $this->input->post('umur');
            
            //array untuk ambil data
            $data = array(
            'nama' => $nama,
            'alamat' => $alamat,
            'umur' => $umur
            );
            
            //load modelnya
            $this->m_sekolah->input_data($data,'siswa');
            redirect('sekolah/index');
        }
        
        function edit($id) {
            $where = array('id_siswa' => $id);
            $data['siswa'] = $this->m_sekolah->edit_data($where,'siswa')->result();
            $this->load->view('v_edit',$data);
        }
        
        function update_sekolah() {
            //buat ambil hasil inputan
            $id = $this->input->post('id');
            $nama = $this->input->post('nama');
            $alamat = $this->input->post('alamat');
            $umur = $this->input->post('umur');
            
            //panggil data
            $data = array(
            'nama' => $nama,
            'alamat' => $alamat,
            'umur' => $umur
            );
            
            //patoknnya
            $where = array(
            'id_siswa' => $id
            );
            
            $this->m_sekolah->update_data($where,$data,'siswa');;
            redirect('sekolah/index');
        }
        
        function delete($id) {
            $where = array('id' => $id);
            $this->m_sekolah->delete_data($where, 'siswa');
            redirect('sekolah/index');
        }
    }

?>