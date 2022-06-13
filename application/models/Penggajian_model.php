<?php

//untuk menampilkan data, dibutuhkan model
class Penggajian_model extends CI_Model
{
    public function get_data($table)
    {

        return $this->db->get($table);
    }

    public function getAllPegawai()
    {

        return $this->db->get('data_pegawai')->result_array();
    }

    public function getPegawai($limit, $start)
    {

        return $this->db->get('data_pegawai', $limit, $start)->result_array();
    }

    public function countAllPegawai()
    {

        return $this->db->get('data_pegawai')->num_rows();
    }

    public function getAllPortfolio()
    {

        return $this->db->get('portfolio')->result_array();
    }

    public function getAllPortfolio1()
    {

        return $this->db->get('portfolio1')->result_array();
    }

    public function getAllPortfolio2()
    {

        return $this->db->get('portfolio2')->result_array();
    }
    public function getAllTeam1()
    {

        return $this->db->get('team1')->result_array();
    }
    public function getAllTeam2()
    {

        return $this->db->get('team2')->result_array();
    }
    public function getAllTeam3()
    {

        return $this->db->get('team3')->result_array();
    }
    public function getAllTeam4()
    {

        return $this->db->get('team4')->result_array();
    }




    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function update_data($table, $data, $where)
    {
        $this->db->update($table, $data, $where);
    }

    public function delete_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function insert_batch($table = null, $data = array())
    {
        $jumlah = count($data);
        if ($jumlah > 0) {
            $this->db->insert_batch($table, $data);
        }
    }
    public function cek_login($where, $table)
    {
        $username = set_value('username');
        $password = set_value('password');

        $result = $this->db->where('username', $username)
            ->where('password', $password)
            ->limit(1)
            ->get('data_pegawai');

        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return FALSE;
        }
    }
}
