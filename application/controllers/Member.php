<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Member extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('role_id') == 1){
            redirect('admin');
        }else if($this->session->userdata('role_id') == null){
            redirect('auth');
        }
        date_default_timezone_set('Asia/Jakarta');
    }
    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('member/index');
        $this->load->view('templates/footer');
    }

    public function profile(){
        $data['title'] = 'Profile';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/profile', $data);
        $this->load->view('templates/footer');
    }
}
