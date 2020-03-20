<?php 
    class Guru extends CI_Controller {
        function __construct() {
            parent::__construct();
            $this->load->model('m_guru');
            $this->load->helper('url');
            if ($this->session->userdata('status') != 'login') {
                redirect(base_url('home'));
            }
        }
        
        function index() {
            $data['guru'] = $this->m_guru->tampil_data()->result();
            $this->load->view('v_header');
            $this->load->view('v_footer');
            $this->load->view('v_guru', $data);
        }
        
        function tambah_guru() {
            $this->load->view('v_addGuru');
        }
        
        function add_guru() {
            $id = $this->input->post('kode_guru');
            $nama = $this->input->post('nama_guru');
            $alamat = $this->input->post('alamat_guru');
            $telpon = $this->input->post('telpon_guru');
            $pelajaran = $this->input->post('pelajaran_guru');
            
            $data = array(
            'id' => $id,
            'nama' => $nama,
            'alamat' => $alamat,
            'telpon' => $telpon,
            'mata_pelajaran' => $pelajaran
            );
            
            $this->m_guru->input($data, 'guru');
            redirect('guru/index');
        }
        
        
        
        function update_guru() {
            $id_guru = $this->input->post('id');
            $nama_guru = $this->input->post('nama');
            $alamat_guru = $this->input->post('alamat');
            $telpon_guru = $this->input->post('telpon');
            $pelajaran_guru = $this->input->post('mata_pelajaran');
            
            $data = array(
            'nama' => $nama_guru,
            'alamat' => $alamat_guru,
            'telpon' => $telpon_guru,
            'mata_pelajaran' => $pelajaran_guru
            );
                
            $where = array(
                'id' => $id_guru
            );
            
            $proses = $this->m_guru->update_guru($where,$data,'guru');
            redirect('guru/index');
            
        }
        
        function edit_guru($id) {
            $where = array('id' => $id);
            $data['guru'] = $this->m_guru->edit($where,'guru')->result();
            $this->load->view('v_editGuru',$data);
        }
        
        function delete_guru($id) {
            $where = array('id' => $id);
            $this->m_guru->delete_guru($where, 'guru');
            redirect('guru/index');
        }
    }

?>
