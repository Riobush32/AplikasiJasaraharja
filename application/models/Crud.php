<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Crud extends CI_Model
{


    // insert data
    function insert_data($data, $table)
    {  
        $this->db->join('Table', 'table.column = table.column', 'left');
        $this->db->insert($table, $data);
    }

    // delete data
    function delete_data($where, $table)
    {
        $this->db->delete($table, $where);
    }

    public function GetUser()
    {
        $query = $this->db->get('adn_admin');
        return $query;
    }

    // update data
    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }


}

/* End of file Crud.php */
