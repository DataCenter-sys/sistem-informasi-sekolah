<?php
defined('BASEPATH') or die('No direct script access allowed');

class User_Model extends CI_Model
{
    function get_data_all()
    {
        $result = $this->db->get('users');
        return $result->result();
    }

    function find_data_by($field, $value, $return = false)
    {
        $this->db->where($field, $value);
        $data = $this->db->get('users');
        if ($data->num_rows() > 0) {
            $data->row();
        }
        return $data;
    }

    function update_data($id, $data)
    {
        $this->db->where('user_role', $id);
        $result = $this->db->update('users', $data);
        return $result;
    }
}
