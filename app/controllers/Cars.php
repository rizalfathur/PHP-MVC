<?php

class Cars extends Controller {
    public function index()
    {
        $data['judul'] = 'Cars';
        $data['crs'] = $this->model('Cars_model')->getAllCars();
        $this->view('template/header', $data);
        $this->view('cars/index', $data);
        $this->view('template/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Car Detail';
        $data['crs'] = $this->model('Cars_model')->getCarsById($id);
        $this->view('template/header', $data);
        $this->view('cars/detail', $data);
        $this->view('template/footer');
    }

    public function tambah()
    {
        if( $this->model('Cars_model')->tambahDataMobil($_POST) > 0)
        {
            Flasher::setFlash('success', 'added', 'success');
            header('Location: ' . BASEURL . '/cars');
            exit;
        }else {
            Flasher::setFlash('failed', 'added', 'danger');
            header('Location: ' . BASEURL . '/cars');
            exit;
        }
    }

    public function hapus($id)
    {
        if( $this->model('Cars_model')->hapusDataMobil($id) > 0)
        {
            Flasher::setFlash('success', 'deleted', 'success');
            header('Location: ' . BASEURL . '/cars');
            exit;
        }else {
            Flasher::setFlash('failed', 'deleted', 'danger');
            header('Location: ' . BASEURL . '/cars');
            exit;
        }
    }

    public function getubah( )
    {
        echo json_encode($this->model('Cars_model')->getCarsById($_POST['id']));
    }

    public function cari()
    {
        $data['judul'] = 'Cars';
        $data['crs'] = $this->model('Cars_model')->cariDataCars();
        $this->view('template/header', $data);
        $this->view('cars/index', $data);
        $this->view('template/footer');  
    }
}