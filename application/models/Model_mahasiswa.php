<?php

class Model_mahasiswa extends CI_Model{

    public function get_Mahasiswa()
    {
        
        $query = $this->db->get('Mahasiswa');  // Produces: SELECT * FROM mytable
        return $query->result_array();
    }
    public function tambahDataMahasiswa()
    {
        // Penggunaan true hanya untuk pengamanan data dari char aneh
        $data = array(
            'Nama' => $this->input->post('nama', true),
            'Jurusan' => $this->input->post('jurusan', true)
    );
    
    $this->db->insert('mahasiswa', $data);
    // Produces: INSERT INTO mytable (title, name, date) VALUES ('My title', 'My name', 'My date')
       
    }

    public function hapusDataMahasiswa($nim)
    {
        $this->db->delete('mahasiswa', array('NIM' => $nim));
    }

    public function updateDataMahasiswa($nim)
    {
        $query = $this->db->get_where('Mahasiswa', array('NIM' => $nim));
        return $query->result_array();
    }

    public function prosesUpdateDataMahasiswa()
    {
        $data = array(
            'NIM' => $this->input->post('nim', true),
            'Nama' => $this->input->post('nama', true),
            'Jurusan' => $this->input->post('jurusan', true)
    );
    
    $this->db->replace('mahasiswa', $data);
    }

}








?>