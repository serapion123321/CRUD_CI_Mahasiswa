<?php

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_mahasiswa');
        $this->load->library('form_validation');        
    }
    

    public function index()
    {
        $data['mahasiswa'] = $this->Model_mahasiswa->get_Mahasiswa();
        $this->load->view('home/index',$data);
        $this->load->view('template/footer');
        $this->load->view('template/navigasi');
    }

    public function tambah()
    {
        $this->form_validation->set_rules('nama','Nama','required'); //Parameter 3 yaitu : nama field, pengganti nama field dan rulesnya apa
        $this->form_validation->set_rules('jurusan','Jurusan','required');
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('home/tambah');
            $this->load->view('template/footer');
            $this->load->view('template/navigasi');
        }
        else
        {
              $this->Model_mahasiswa->tambahDataMahasiswa();
              $this->session->set_flashdata('flash','Ditambahkan'); // Parameter 2 yaitu : nama flash dan isi
              redirect('Home');
        }
        
    }

    public function hapus($nim)
    {
        $this->Model_mahasiswa->hapusDataMahasiswa($nim);
        $this->session->set_flashdata('flashHapus','Dihapus'); // Parameter 2 yaitu : nama flash dan isi
        redirect('Home');
    }

    public function update($nim)
    {
        $data['mahasiswa'] = $this->Model_mahasiswa->updateDataMahasiswa($nim);
        $this->load->view('home/update',$data);
        $this->load->view('template/footer');
        $this->load->view('template/navigasi');
    }

    public function prosesUpdate()
    {
        $this->form_validation->set_rules('nama','Nama','required'); //Parameter 3 yaitu : nama field, pengganti nama field dan rulesnya apa
        $this->form_validation->set_rules('jurusan','Jurusan','required');
        $this->form_validation->set_rules('nim','NIM','required');
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('home/tambah');
            $this->load->view('template/footer');
            $this->load->view('template/navigasi');
        }
        else
        {
              $this->Model_mahasiswa->prosesUpdateDataMahasiswa();
              $this->session->set_flashdata('flash','Diedit'); // Parameter 2 yaitu : nama flash dan isi
              redirect('Home');
        }
    }
}



?>