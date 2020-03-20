<?php
    class M_guru extends CI_Model {
        
        function tampil_data() {
            return $this->db->get('guru');    
        }
        
        function input($data, $table) {
            $this->db->insert($table, $data);
        }
        
        function edit($where,$table){		
		      return $this->db->get_where($table, $where);
	   }
        
        function update_guru($where, $data, $table){
		  $this->db->where($where);
		  $this->db->update($table,$data);
	    }	
	    	
        function delete_guru($where, $table) {
            $this->db->where($where);
            $this->db->delete($table);
        }
    }
?>
