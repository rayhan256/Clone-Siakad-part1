<?php
    class M_login extends CI_Model {
        
        function login_validation($table, $where) {
            return $this->db->get_where($table, $where);
        }
        
        function signUp($data, $table) {
            $this->db->insert($table, $data);
        }
        
        function tampil_data() {
            return $this->db->get('akun_siswa');
        }
        
        
    }
?>
