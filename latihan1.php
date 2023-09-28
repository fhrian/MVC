<?php
class latihan1 extends CI_Controller
{
    public function index()
    {
        echo "selamat datang.. selamat belajar web programming";
        // $this->load->views('views_latihan1');
    }
    public function penjumlahan($nil1, $nil2)
    {
        $this->load->model('model_latihan1');

        $data['nilai1'] = $nil1;
        $data['nilai2'] = $nil2;
        $data['hasil'] = $this->model_latihan1->jumlah($nil1, $nil2);

        $this->load->view('views_latihan1', $data);
    }
}
