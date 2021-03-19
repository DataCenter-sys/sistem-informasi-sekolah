<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data extends CI_Model
{

    /**
     * Constructor.
     *
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Fungsi untuk insert data ke dalam database.
     *
     */
    public function save($data)
    {
        return $this->db->insert('data_guru', $data);
    }

    /**
     * Fungsi untuk menampilkan data dari database.
     *
     */
    public function get_all()
    {
        return $this->db->get('tb_data_guru')->result_array();
    }

    public function get()
    {
    }

    /**
     * Fungsi import data spread sheet.
     *
     */
    private $_batchImport;

    public function setBatchImport($batchImport)
    {
        $this->_batchImport = $batchImport;
    }

    /*
    |--------------------------------------------------------------------------
    | Import data siswa
    |--------------------------------------------------------------------------
    |
    | Import data siswa from dapodik.
    | You can upload data from xlsx, xls, and csv.
    | Recomended xlsx
    |
    */
    public function importData()
    {
        $data = $this->_batchImport;
        $this->db->insert_batch('tb_data_guru', $data);
    }

    /*
    |--------------------------------------------------------------------------
    | Import data siswa
    |--------------------------------------------------------------------------
    |
    | Import data siswa from dapodik.
    | You can upload data from xlsx, xls, and csv.
    | Recomended xlsx
    |
    */
    public function importDataSiswa()
    {
        $data = $this->_batchImport;
        $this->db->insert_batch('tb_data_siswa', $data);
    }

    public function join()
    {
        $this->db->select('*');
        $this->db->from('tb_tagihan');
        $this->db->join('tb_siswa', 'tb_siswa.kelas=tb_tagihan.kategori_tagihan');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function join2($kelas)
    {
        $this->db->select('*');
        $this->db->from('tb_tagihan');
        $this->db->join('tb_siswa', 'tb_siswa.kelas=tb_tagihan.kategori_tagihan');
        $this->db->where('tb_tagihan.kategori_tagihan', $kelas);
        $query = $this->db->get();
        return $query->result_array();
    }
}
