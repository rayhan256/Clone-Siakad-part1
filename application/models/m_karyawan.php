<?php
    class M_karyawan extends CI_Model {
        
        function tampil_data() {
            return $this->db->get('karyawan');
        }
        
        function insert_karyawan($data, $table) {
            $this->db->insert($table, $data);
        }
        
        function update_karyawan($where, $data, $table) {
            $this->db->where($where);
            $this->db->update($table, $data);
        }
        
        function edit_karyawan($table, $where) {
            return $this->db->get_where($where, $table);
        }
        
        function delete_karyawan($where, $table) {
            $this->db->delete($table, $where);
        } 
    }
?>
