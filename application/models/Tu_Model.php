<?php
defined('BASEPATH') or die('No direct script access allowed');

class Tu_Model extends CI_Model
{

    function counting_class($table, $row, $field)
    {
        $result = $this->db->where([$row => $field])->from($table)->count_all_results();
        return $result;
    }

    function counting_teacher($table, $row, $field)
    {
        $result = $this->db->where([$row => $field])->from($table)->count_all_results();
        return $result;
    }
}
