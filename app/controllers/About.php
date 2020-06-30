<?php

//semua controller yang dibuat harus inherit kepada Controller yang ada pada core
class About extends Controller{
    public function index($nama = 'Uwed')
    {
        $data['judul'] = 'About';
        $data['nama'] = $nama;
        $this->view('template/header', $data);
        $this->view('about/index', $data);
        $this->view('template/footer');

    }
    
    public function page()
    {
        $data['judul'] = 'Page';
        $this->view('template/header', $data);
        $this->view('about/page');
        $this->view('template/footer');
    }

}