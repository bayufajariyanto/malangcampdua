<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pesanan_model extends CI_Model
{
    public function getBarangStok(){
        $query = "SELECT * FROM barang WHERE `stok`>= 1";
        return $this->db->query($query)->result_array();
    }

    public function getBarangById($id){
        $query = "SELECT * FROM barang WHERE `id` = $id";
        return $this->db->query($query)->row_array();
    }
}