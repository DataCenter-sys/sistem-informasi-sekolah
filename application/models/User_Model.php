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

    function counting_active()
    {
        $this->db->select('id_user, COUNT(name) as total');
        $this->db->group_by('name');
        $this->db->order_by('total', 'desc');
        $result = $this->db->get('tb_user')->result_array();
        return $result;
    }

    function counting_not_active()
    {
        $this->db->select('id_user, COUNT(name) as total');
        $this->db->group_by('name');
        $this->db->order_by('total', 'desc');
        $result = $this->db->get('tb_user')->result_array();
        return $result;
    }

    function counting()
    {
        $this->db->select('id_user, COUNT(name) as total');
        $this->db->group_by('name');
        $this->db->order_by('total', 'desc');
        $result = $this->db->get('tb_user')->result_array();
        return $result;
    }

    public function tagihan()
    {
        $this->db->select('id_tagihan AS nomor, no_tagihan AS nomor_tagihan, kelas AS nama_kelas, tgh_du AS daftar_ulang, tgh_buku AS buku, tgh_pts AS pts, tgh_pas AS pas, tgh_kegiatan AS kegiatan, sum(tgh_spp_1) + sum(tgh_spp_2) + sum(tgh_spp_3) + sum(tgh_spp_4) + sum(tgh_spp_5) + sum(tgh_spp_6) + sum(tgh_spp_7) + sum(tgh_spp_8) + sum(tgh_spp_9) + sum(tgh_spp_10) + sum(tgh_spp_11) + sum(tgh_spp_12) AS total_spp');
        $this->db->group_by('id_tagihan');
        $this->db->order_by('total_spp');
        $result = $this->db->get('tb_tagihan')->result_array();
        return $result;
    }
}
