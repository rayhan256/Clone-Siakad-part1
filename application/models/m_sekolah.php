<?php
    class M_sekolah extends CI_Model {
        function tampil_data() {
            //return data nya
           return $this->db->get('siswa');
        }
        
        function cari_data($keyword) {
            $siswa = $this->db->query("select * from siswa where nama like '%".$keyword."%'");
            return $siswa;
        }
        
        function input_data($data,$table) {
            $this->db->insert($table,$data);
        }
        
        function edit_data($where,$table){      
            return $this->db->get_where($table,$where);
        }
        
        function update_data($where,$data,$table){
		  $this->db->where($where);
		  $this->db->update($table,$data);
	    }	
        
        function delete_data($where, $table) {
            $this->db->where($where);
            $this->db->delete($table);
        }
        
        function search($keyword) {
            $query = $this->db->query("select * from siswa where nama LIKE '%$keyword%'");
            $this->db->like('nama', $keyword);
            return $query->result();
        }
        
        function v_lengkapi_data () {
            
        }
        
    }

?>