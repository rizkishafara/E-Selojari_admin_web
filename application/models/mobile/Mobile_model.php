<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Mobile_model extends CI_Model
{
    public function getAll()
    {
       
        $query = $this->db->query("SELECT * FROM barang");
        $arraydata= array();

        foreach($query->result_array() as $row){
            $arraydata[]=$row;
        }
        echo json_encode($arraydata);
        
    }

    public function login()
    {
        $username = $_POST["username"];
        $password = md5($_POST["password"]);
        if ((empty($username)) || (empty($password))) {
            $response = new Mobile_model();
            $response->success = 0;
            $response->message = "Kolom tidak boleh kosong";
            die(json_encode($response));
           }
           
           $query = $this->db->query("SELECT * FROM konsumen WHERE username='$username' AND password='$password'");
           
           foreach($query->result_array() as $row)
           
           if (!empty($row)){
            $response = new Mobile_model();
            $response->success = 1;
            $response->message = "Selamat datang ".$row['username'];
            $response->username = $row['username'];
            die(json_encode($response));
           
           } else {
            $response = new Mobile_model();
            $response->success = 0;
            $response->message = "Username atau password salah";
            die(json_encode($response));
           }
           
    }

    public function Register()
    {
        $nm_kons = $_POST["nm_kons"];
        $alm_kons = $_POST["alm_kons"];
        $kota_kons = $_POST["kota_kons"];
        $kd_pos = $_POST["kd_pos"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $username = $_POST["username"];
        $password = md5($_POST["password"]);
        $insert = $this->db->query ("INSERT INTO konsumen(nm_kons,alm_kons,kota_kons,kd_pos, phone, email, username, password) VALUES('$nm_kons','$alm_kons','$kota_kons','$kd_pos','$phone','$email','$username','$password')");
        if($insert)
        {
            $response = new Mobile_model();
            $response->success = 1;
            $response->message = "Registrasi Berhasil, Silahkan LOGIN!";
            die(json_encode($response));
        }
        else
        {
            $response = new Mobile_model();
            $response->success = 0;
            $response->message = "Registrasi gagal!";
            die(json_encode($response));
        }

    }

    public function createJual(){
        $username =$_POST['username'];
        $subtot=$_POST['subtot'];
        $ongkir=$_POST['ongkir'];
        $total=$_POST['total'];
        $pembayaran=$_POST['pembayaran'];
        $kembalian=$_POST['kembalian'];
        $tanggal=date("Y-m-d H:i:s");
        $insert = $this->db->query ("INSERT INTO mjual(kd_kons,tgl_jual,subtot,ongkir,total_biaya,pembayaran,kembalian) VALUES('$username','$tanggal','$subtot','$ongkir','$total','$pembayaran','$kembalian')");
        $response = array();
        if($insert)
        {
            $response['code'] =1;
            $response['message'] = "Success ! Pemesanan dibuat";
        }
        else
        {
            $response['code'] =0;
            $response['message'] = "Failed ! Pemesanan gagal dibuat";
        }
        echo json_encode($response);
    }

    public function updatePassword()
    {
        $username=$_POST['username'];
        $password=md5($_POST['password']);
        $update=$this->db->query("UPDATE konsumen SET password='$password' WHERE username='$username'");

        if($update)
        {
            $response = new Mobile_model();
            $response->success = 1;
            $response->message = "Update Password Berhasil";
            die(json_encode($response));
        }
        else
        {
            $response = new Mobile_model();
            $response->success = 0;
            $response->message = "Update gagal!";
            die(json_encode($response));
        }
    }

    public function riwayat()
    {
        $username=$_POST['username'];
        $query = $this->db->query("SELECT no_nota,tgl_jual,subtot,ongkir,total_biaya,status FROM mjual where kd_kons = '$username'");
        $arraydata= array();

        foreach($query->result_array() as $row){
            $arraydata[]=$row;
        }
        echo json_encode($arraydata);

        /*if (mysqli_num_rows($query) > 0) {
            while ($row = mysqli_fetch_object($query)) {
                $data['result'][] = $row;
            }
        } else {
            $data['result'][] = "Data not Found";
        }
        print_r(json_encode($data));*/
        
    }

    public function updateStatus() 
    {
        $no_nota = $_POST['no_nota'];
        $gambar = $_POST['gambar'];
        $response = array();
        $this->db->query("UPDATE mjual SET status = 1, bukti_tf = '$gambar' WHERE no_nota='$no_nota'");
        //$sql = mysqli_query ($koneksi,$query);
        $response['message'] = "Upload bukti berhasil";
        echo json_encode($response);
    }


    /*public function detailJual(){
        $ambil=$this->db->query("SELECT no_nota FROM mjual ORDER BY no_nota DESC limit 1");
        $row=$ambil->row();
        $no_nota=$row[0];
        $kode=$_POST['kode'];
        $ambil=$this->db->query("SELECT harga,harga_beli FROM barang WHERE kd_brg='$kode'");
        $row=$ambil->row();
        $harga=$row[0];
        $hargabeli=$row[1];
        $jumlah=$_POST['jumlah'];
        $total_harga=$harga*$jumlah;
        $insert = "INSERT INTO detailjual(no_nota,kd_brg,hrg_brg,hrg_beli,jml_brg) VALUES('$no_nota','$kode','$harga','$hargabeli','$jumlah')";
        $exeinsert = $this->db->query($insert);
        $response = array();
        if($exeinsert)
        {
            $response['code'] =1;
            $response['message'] = "Success ! Detail pemesanan dibuat";
        }
        else
        {
            $response['code'] =0;
            $response['message'] = "Failed ! Detail pemesanan gagal dibuat";
        }
        echo json_encode($response);
    }*/
}