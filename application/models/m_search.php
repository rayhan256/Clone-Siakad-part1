<?php
    class M_search extends CI_Model {
        
        function view() {
            return $this->db->get('siswa')->result();
        }
        
        function search($keyword) {
            $this->db->like('nama', $keyword);
            $this->db->or_like('alamat', $keyword);
            $this->db->or_like('umur', $keyword);
            
            $result = $this->db->get('siswa')->result();
            
            return $result;
        }
    }
?>
