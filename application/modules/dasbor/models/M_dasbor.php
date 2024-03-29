<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_dasbor extends CI_Model
{
     function total_user()
     {
         return $this->db->get('user')->num_rows();
     }
     function total_respon_dashboard()
     {
         return $this->db->get('responden')->num_rows();
     }
     function total_berkas()
     {
         return $this->db->get('manajerial')->num_rows();
     }
     function total_aplikasi()
     {
         return $this->db->get('manajerial')->num_rows();
     }
     
     function total_paket()
     {
         return $this->db->get('paket_soal')->num_rows();
     }
     
     function total_soal_dashboard()
     {
         return $this->db->get('daftar_soal')->num_rows();
     }


    function grafik_pie()
     {
        $sql = "SELECT sebagai, COUNT(*) AS Jumlah FROM kuesioner GROUP BY sebagai ORDER BY sebagai";
        $hasil= $this->db->query($sql);
        if($hasil){
            return $hasil->result();
        }else{
            return 0;
        }
     }


    function grafik_manajerial()
     {
        $sql = "SELECT nama_apl, COUNT(*) AS Jumlah FROM manajerial GROUP BY nama_apl ORDER BY nama_apl";
        $hasil= $this->db->query($sql);
        if($hasil){
            return $hasil->result();
        }else{
            return 0;
        }
     }

     function grafik_batang()
     {
        $sql = "SELECT sebagai, COUNT(*) AS Jumlah FROM responden GROUP BY sebagai ORDER BY sebagai";
        $hasil= $this->db->query($sql);
        if($hasil){
            return $hasil->result();
        }else{
            return 0;
        }
     }

    //  function total_respon()
    //  {
    //      $query   = $this->db->query('SELECT * FROM responden WHERE sebagai= "dosen"');
    //      $query   = $this->db->query('SELECT * FROM responden WHERE sebagai= "mahasiswa"');
    //      $query   = $this->db->query('SELECT * FROM responden WHERE sebagai= "karyawan"');
    //      $query   = $this->db->query('SELECT * FROM responden WHERE sebagai= "staf"');
    //      $dosen = $query->num_rows();
    //      return $dosen;
    //  }
     
    # Total Responden Berdasarkan sebagai
     function total_dosen()
     {
         $query   = $this->db->query('SELECT * FROM kuesioner WHERE sebagai= "dosen"');
         $dosen = $query->num_rows();
         return $dosen;
     }

     function total_mahasiswa()
     {
         $query   = $this->db->query('SELECT * FROM kuesioner WHERE sebagai= "mahasiswa"');
         $mahasiswa = $query->num_rows();
         return $mahasiswa;
     }

# Total Prodi
     function total_TI()
     {
         $query   = $this->db->query('SELECT * FROM kuesioner WHERE prodi= "TI"');
         $TI = $query->num_rows();
         return $TI;
     }

     function total_KOM()
     {
         $query   = $this->db->query('SELECT * FROM kuesioner WHERE prodi= "TKOM"');
         $KOM = $query->num_rows();
         return $KOM;
     }

    function total_ASP()
     {
         $query   = $this->db->query('SELECT * FROM kuesioner WHERE prodi= "ASP"');
         $ASP = $query->num_rows();
         return $ASP;
     }

     function total_AK()
     {
         $query   = $this->db->query('SELECT * FROM kuesioner WHERE prodi= "AK"');
         $AK = $query->num_rows();
         return $AK;
     }

     function total_FARM()
     {
         $query   = $this->db->query('SELECT * FROM kuesioner WHERE prodi= "FARM"');
         $FARM = $query->num_rows();
         return $FARM;
     }

     function total_PER()
     {
         $query   = $this->db->query('SELECT * FROM kuesioner WHERE prodi= "PER"');
         $PH = $query->num_rows();
         return $PH;
     }

     function total_BID()
     {
         $query   = $this->db->query('SELECT * FROM kuesioner WHERE prodi= "BID"');
         $BID = $query->num_rows();
         return $BID;
     }

     function total_MSN()
     {
         $query   = $this->db->query('SELECT * FROM kuesioner WHERE prodi= "MSN"');
         $MSN = $query->num_rows();
         return $MSN;
     }

     function total_DKV()
     {
         $query   = $this->db->query('SELECT * FROM kuesioner WHERE prodi= "DKV"');
         $DKV = $query->num_rows();
         return $DKV;
     }

     function total_PRWT()
     {
         $query   = $this->db->query('SELECT * FROM kuesioner WHERE prodi= "PRWT"');
         $PRWT = $query->num_rows();
         return $PRWT;
     }

     function total_ELKTR()
     {
         $query   = $this->db->query('SELECT * FROM kuesioner WHERE prodi= "ELKTR"');
         $ELKTR = $query->num_rows();
         return $ELKTR;
     }



    //  SKORRR
    function total_responden($where)
    {
        $this->db->select('*');
        $this->db->from('kuesioner');
        $this->db->join('paket_soal', 'paket_soal.id_paket = kuesioner.id_paket_jawaban');
        $this->db->where($where);
        $this->db->order_by('id_paket', 'asc');
        $query = $this->db->get()->num_rows();
        return $query;
    }

    function total_soal($where)
    {
        $this->db->select('*');
        $this->db->from('kuesioner');
        $this->db->join('paket_soal', 'paket_soal.id_paket = kuesioner.id_paket_jawaban');
        $this->db->where($where);
        $this->db->order_by('id_paket', 'asc');
        $query = $this->db->get()->num_rows();
        return $query;
    }
    
    // Skor Positif
    function total_ss_p($where)
    {
        $this->db->select('*');
        $this->db->from('kuesioner');
        $this->db->join('paket_soal', 'paket_soal.id_paket = kuesioner.id_paket_jawaban');
        $this->db->where($where);
        $this->db->where('jawaban = "4"');
        $this->db->order_by('id_paket', 'asc');
        $query = $this->db->get()->num_rows();
        return $query;
    }

    function total_s_p($where)
    {
        $this->db->select('*');
        $this->db->from('kuesioner');
        $this->db->join('paket_soal', 'paket_soal.id_paket = kuesioner.id_paket_jawaban');
        $this->db->where($where);
        $this->db->where('jawaban = "3"');
        $this->db->order_by('id_paket', 'asc');
        $query = $this->db->get()->num_rows();
        return $query;
    }
    
    function total_ts_p($where)
    {
        $this->db->select('*');
        $this->db->from('kuesioner');
        $this->db->join('paket_soal', 'paket_soal.id_paket = kuesioner.id_paket_jawaban');
        $this->db->where($where);
        $this->db->where('jawaban = "2"');
        $this->db->order_by('id_paket', 'asc');
        $query = $this->db->get()->num_rows();
        return $query;
    }

    function total_sts_p($where)
    {
        $this->db->select('*');
        $this->db->from('kuesioner');
        $this->db->join('paket_soal', 'paket_soal.id_paket = kuesioner.id_paket_jawaban');
        $this->db->where($where);
        $this->db->where('jawaban = "1"');
        $this->db->order_by('id_paket', 'asc');
        $query = $this->db->get()->num_rows();
        return $query;
    }

    // Total Label Klasifikasi
    function label_baik($where)
    {
        $this->db->select('*');
        $this->db->from('klasifikasi');
        $this->db->join('paket_soal', 'paket_soal.id_paket = klasifikasi.id_paket_jawaban');
        $this->db->where($where);
        $this->db->where('label = "Baik"');
        $this->db->order_by('id_paket', 'asc');
        $query = $this->db->get()->num_rows();
        return $query;
    }

    function label_kurang($where)
    {
        $this->db->select('*');
        $this->db->from('klasifikasi');
        $this->db->join('paket_soal', 'paket_soal.id_paket = klasifikasi.id_paket_jawaban');
        $this->db->where($where);
        $this->db->where('label="Kurang"');
        $this->db->order_by('id_paket', 'asc');
        $query = $this->db->get()->num_rows();
        return $query;
    }

    function jumlah_saran($where)
    {
        return $this->db->get('klasifikasi')->num_rows();
    }

    function total_prodi()
     {
         $query   = $this->db->query('SELECT * FROM user WHERE user_prodi');
         $prodi = $query->num_rows();
         return $prodi;
     }
}
?>