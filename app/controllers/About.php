<?php
class About extends Controller{
    public function index($nama='indra', $pekerjaan='web developer', $umur=19){
        $data['judul'] = 'About';
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $this->view('template/header',$data);
   
        $this->view('About/index',$data);
        $this->view('template/footer');
    }

    public function page(){
        $data['judul'] = 'Page';
        $this->view('template/header',$data);
        $this->view('About/page');
        $this->view('template/footer');
    }
}