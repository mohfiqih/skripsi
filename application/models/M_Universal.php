<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Universal extends CI_Model
{
    public function getOne($where, $tabel)
    {
        if (!empty($where)) {
            $this->db->where($where);
        }

        $data = $this->db->get($tabel)->row();
        return (count((array)$data) > 0) ? $data : false;
    }

    public function getOneSelect($select, $where, $table)
    {
        $this->db->select($select);
        if (!empty($where)) {
            $this->db->where($where);
        }
        $data = $this->db->get($table)->row();
        return (count((array)$data) > 0) ? $data : false;
    }


    public function getMulti($where, $tabel)
    {
        if (!empty($where)) {
            $this->db->where($where);
        }
        $data = $this->db->get($tabel)->result();
        return $data;
    }

    // public function getMulti_soal()
    // {
    //     $this->db->select('*');
    //     $this->db->from('daftar_soal');
    //     $this->db->join('paket_soal', 'paket_soal.id_paket = daftar_soal.paket_id','paket_soal.nama_paket');
    //         if (!empty($where)) {
    //             $this->db->where("paket_soal.nama_paket",$where);
    //         }
    //         $query = $this->db->get()->result();
    //         return $query;
    // }

    public function getMulti_soal()
    {
        $this->db->select('*');
        $this->db->from('paket_soal');
        $this->db->join('daftar_soal', 'daftar_soal.paket_id = paket_soal.id_paket','paket_soal.nama_paket');
            // $this->db->where($where);
            // $this->db->order_by('paket_id', 'asc');
            if (!empty($where)) {
                $this->db->where("paket_soal.nama_paket",$where);
            }
            $query = $this->db->get()->result();
            return $query;
    }

    public function update($data, $where, $tabel)
    {
        $this->db->where($where);
        $update = $this->db->update($tabel, $data);
        return ($update) ? true : false;
    }

    public function insert($data, $tabel)
    {
        return ($this->db->insert($tabel, $data)) ? true : false;
    }
    
    // public function insert_kuesioner($data, $tabel)
    // {
    //     return ($this->db->insert($tabel, $data)) ? true : false;
    // }

    public function delete($where, $tabel)
    {
        return ($this->db->where($where)->delete($tabel)) ? true : false;
    }

    // public function get_relasi()
    // {
    //     $this->db->select(['soal.soal','soal.id_soal','soal.jenis_soal','soal.sangat_setuju','soal.setuju','soal.cukup','soal.tidak_setuju','soal.sangat_tidaksetuju','tb_jawaban.jawaban','tb_jawaban.id_jawaban','tb_jawaban.id_soal']);
    //     $this->db->from('soal');
    //     $this->db->join('tb_jawaban', 'tb_jawaban.id_jawaban = soal.id_soal', 'left');
    //     $this->db->order_by('jawaban', 'asc');
    //     $return = $this->db->get('');
    //     return $return->result();
    // }

    // function HitungDataNegatif()
    // {
    //     $query = $this->db->query('SELECT * FROM daftar_soal WHERE kategori_soal= "Negatif"');
    //     $negatif = $query->num_rows();
    //     return $negatif;
    // }

    // function HitungDataPositif()
    // {
    //     $query = $this->db->query('SELECT * FROM daftar_soal WHERE kategori_soal= "Positif"');
    //     $positif = $query->num_rows();
    //     return $positif;
    // }

    // function HitungTotalSoal()
    // {
    //     $query = $this->db->query('SELECT * FROM daftar_soal WHERE kategori_soal= "Positif"');
    //     $positif = $query->num_rows();
    //     return $positif;
    // }

    public function get_soal($where) 
    {
            $this->db->select('*');
            $this->db->from('daftar_soal');
            $this->db->join('paket_soal', 'paket_soal.id_paket = daftar_soal.paket_id','paket_soal.nama_paket');
            $this->db->where($where);
            $this->db->order_by('id_soal', 'asc');
            $query = $this->db->get()->result();
            return $query;
    }

    function insertDataManajemen($data)
    {
        $this->db->insert('manajerial', $data);
    }

	
    public function getOrderBy($where, $tabel, $order, $urutan, $limit)
    {
        if (!empty($where)) {
            $this->db->where($where);
        }
        if (!empty($urutan)) {
            $this->db->order_by($order, $urutan);
        }
        $this->db->order_by($order);
        if (!empty($limit)) {
            $this->db->limit($limit);
        }

        $data = $this->db->get($tabel)->result();
        return (count((array)$data) > 0) ? $data : false;
    }
	
    public function insert_batch($data, $tabel)
    {
        return ($this->db->insert_batch($tabel, $data)) ? true : false;
    }

    public function countDataManajemen()
    {
        return $this->db->get('manajerial')->num_rows();  
    }

    function total_user()
     {
         return $this->db->get('user')->num_rows();
     }

     function total_aplikasi()
     {
         return $this->db->get('manajerial')->num_rows();
     }

     function total_positif()
     {
         return $this->db->get('daftar_soal')->num_rows();
     }

     function total_responden1()
     {
         return $this->db->get('responden1')->num_rows();
     }

     function total_paket()
     {
         return $this->db->get('paket_soal')->num_rows();
     }
     
     public function upload($data = array())
     {
         return $this->db->insert_batch('manajerial', $data);
     }
     
     public function get_kuesioner($where, $tabel)
     {
          if (!empty($where)) {
               $this->db->where($where);
           }
           $data = $this->db->get($tabel)->result();
           return (count((array)$data) > 0) ? $data : false;
     }

    public function get_soal_kuesioner($where) 
    {
        $this->db->select('*');
        $this->db->from('daftar_soal');
        $this->db->join('paket_soal', 'paket_soal.id_paket = daftar_soal.paket_id','paket_soal.nama_paket');
        // $this->db->join('responden', 'paket_soal.id_paket = responden.paket_id_responden');
        $this->db->where($where);
        $this->db->group_by('id_soal');
        $this->db->order_by('id_soal', 'asc');
        $query = $this->db->get()->result();
        return $query;
    }

    
}
?>