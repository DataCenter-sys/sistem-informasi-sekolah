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

    function counting()
    {
        $result = $this->db->where(['id_user'])->from("tb_user")->count_all_results();
        return $result;
    }

    function counting_active($row, $active)
    {
        if ($active) {
            $result = $this->db->where([$row => $active])->from("tb_user")->count_all_results();
        } else {
            $result = $this->db->where([$row => $active])->from("tb_user")->count_all_results();
        }
        return $result;
    }


    public function tagihan()
    {
        $this->db->select('*');
        $this->db->from('tb_data_siswa');
        $this->db->join('tb_tagihan_kegiatan', 'tb_tagihan_kegiatan.kelas = tb_data_siswa.nisn');
        $this->db->join('tb_tagihan', 'tb_tagihan.kelas = tb_data_siswa.nisn');
        $query = $this->db->get();
        return $query->result();
    }
}
