<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function index()
    {
        $this->member();
    }
    
    public function member(){
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $username = strtolower($this->input->post('username'));
        $password = $this->input->post('password1');
        $nama = ucwords($this->input->post('nama'));
        $no_kitas = $this->input->post('nokitas');
        $jenis_kitas = $this->input->post('kitas');
        $alamat = ucfirst($this->input->post('alamat'));
        $telp = $this->input->post('telp');
        
        // $this->form_validation->set_rules('username', 'Username', 'trim|required|max_length[20]|is_unique[user.username]', [
        //     'required' => '%s harus diisi',
        //     'max_length' => '%s terlalu panjang',
        //     'is_unique' => '%s telah dipakai, coba pakai yang lain'
        // ]);
        // $this->form_validation->set_rules('telp', 'Nomor Telepon', 'trim|required', [
            
        // ]);
        // $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        // $this->form_validation->set_rules('nokitas', 'Nomor Kartu Identitas', 'trim|required');
        // $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
        // $this->form_validation->set_rules('password1', 'Password', 'trim|required');
        // $this->form_validation->set_rules('password2', 'Konfirmasi Password', 'trim|required');
        
        if($this->form_validation->run('member') == false){
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/member');
            $this->load->view('templates/footer');
        }else{
            $data = [
                'username' => $username,
                'password' => password_hash($password, PASSWORD_DEFAULT),
                'nama' => $nama,
                'no_kitas' => $no_kitas,
                'jenis_kitas' => $jenis_kitas,
                'alamat' => $alamat,
                'telp' => $telp,
                'date_created' => time(),
                'role_id' => 2,
            ];
            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Member baru berhasil ditambahkan!</div>');
            redirect('admin/member');
        }

    }
}
