<?php
 class Karyawan extends CI_Controller {
     
     function __construct() {
         parent::__construct();
         
         $this->load->model('m_karyawan');
         $this->load->helper('url');
         if ($this->session->userdata('status') != 'login') {
                redirect(base_url('home'));
            }
     }
     
     function index() {
         $data['karyawan'] = $this->m_karyawan->tampil_data()->result();
         $this->load->view('v_header');
         $this->load->view('v_footer');
         $this->load->view('v_karyawan', $data);
     }
     
     function v_add() {
         $this->load->view('v_addKaryawan');
     }
     
     function add_karyawan() {
        $nama = $this->input->post('nama_karyawan');
        $alamat = $this->input->post('alamat_karyawan');
        $telpon = $this->input->post('telpon_karyawan');
        $jabatan = $this->input->post('jabatan');
         
         //panggil query
         $data = array(
            'nama' => $nama,
             'alamat' => $alamat,
             'telpon' => $telpon,
             'jabatan' => $jabatan
         );
         
         //panggil model
         $this->m_karyawan->insert_karyawan($data, 'karyawan');
         redirect('karyawan/index');
         
     }
     
     function v_editKaryawan($id) {
         $where = array('id' => $id);
         $data['karyawan'] = $this->m_karyawan->edit_karyawan($where, 'karyawan')->result();
         $this->load->view('v_editKaryawan', $data);
     }
     
     function edit_karyawan() {
         //masukan data
         $id = $this->input->post('id');
         $nama = $this->input->post('nama');
         $alamat = $this->input->post('alamat');
         $telpon = $this->input->post('telpon');
         $jabatan = $this->input->post('jabatan');
         
         //query
         $data = array(
            'nama' => $nama,
             'alamat' => $alamat,
             'telpon' => $telpon,
             'jabatan' => $jabatan
         );
         //where
         $where = array('id' => $id);
         
         //model
         $this->m_karyawan->update_karyawan($where, $data, 'karyawan');
         redirect('karyawan/index');
     }
     
     function delete_karyawan($id) {
         $where = array('id' => $id);
         $this->m_karyawan->delete_karyawan($where, 'karyawan');
         redirect('karyawan/index');
     }
 }
?>
