<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('role_id') == 2) {
            redirect('member');
        } else if ($this->session->userdata('role_id') == null) {
            redirect('auth');
        }
    }

    public function index()
    {
        $this->member();
    }

    public function member()
    {
        $data['title'] = 'Member';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['member'] = $this->db->get_where('user', ['role_id' => 2])->result_array();
        $username = strtolower($this->input->post('username'));
        $password = $this->input->post('password1');
        $nama = ucwords($this->input->post('nama'));
        $no_kitas = $this->input->post('nokitas');
        $jenis_kitas = $this->input->post('kitas');
        $alamat = ucfirst($this->input->post('alamat'));
        $telp = $this->input->post('telp');

        if ($this->form_validation->run('member') == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/member');
            $this->load->view('templates/footer');
        } else {
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

    public function member_detail($id)
    {
        $data['title'] = 'Detail Member';

        $data['user'] = $this->db->get_where('user', ['id' => $id])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/member_detail');
        $this->load->view('templates/footer');
    }

    public function member_edit($id)
    {
        $data['title'] = 'Edit Member';

        $data['user'] = $this->db->get_where('user', ['id' => $id])->row_array();

        $username = strtolower($this->input->post('username'));
        $password = $this->input->post('password1');
        $nama = ucwords($this->input->post('nama'));
        $no_kitas = $this->input->post('nokitas');
        $jenis_kitas = $this->input->post('kitas');
        $alamat = ucfirst($this->input->post('alamat'));
        $telp = $this->input->post('telp');

        if ($username != $data['user']['username']) {
            $unikuser = '|is_unique[user.username]';
        } else {
            $unikuser = '';
        }
        if ($telp != $data['user']['telp']) {
            $uniktelp = 'is_unique[user.telp]';
        } else {
            $uniktelp = '';
        }

        $this->form_validation->set_rules(
            'username',
            'Username',
            'trim|required|min_length[4]|max_length[25]|alpha_dash' . $unikuser,
            [
                'required' => '%s harus diisi',
                'min_length' => '%s tidak kurang dari 4 karakter',
                'max_length' => '%s tidak lebih dari 25 karakter',
                'is_unique' => '%s telah dipakai, silakan gunakan yang lain',
                'alpha_dash' => '%s hanya menggunakan huruf, underscore, atau angka'
            ]
        );
        $this->form_validation->set_rules(
            'telp',
            'Nomor Telepon',
            'trim|required|min_length[3]|max_length[12]|integer' . $uniktelp,
            [
                'required' => '%s harus diisi',
                'min_length' => '%s tidak kurang dari 3 angka',
                'max_length' => '%s tidak lebih dari 12 angka',
                'integer' => '%s harus angka',
                'is_unique' => '%s sudah ada silakan gunakan yang lain'
            ]
        );
        if ($this->form_validation->run('member_edit') == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/member_edit');
            $this->load->view('templates/footer');
        } else {

            $data = [
                'username' => $username,
                // 'password' => password_hash($password, PASSWORD_DEFAULT),
                'nama' => $nama,
                'no_kitas' => $no_kitas,
                'jenis_kitas' => $jenis_kitas,
                'alamat' => $alamat,
                'telp' => $telp
            ];
            $this->db->update('user', $data, ['id' => $id]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Member
            ' . $data['user']['username'] . ' berhasil diubah!</div>');
            redirect('admin/member');
        }
    }

    public function member_hapus($id)
    {
        $data['user'] = $this->db->get_where('user', ['id' => $id])->row_array();
        $this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">Member ' . $data['user']['username'] . ' berhasil dihapus!</div>');
        $this->db->delete('user', array('id' => $id));
        redirect('admin/member');
    }

    // Barang
    public function barang()
    {
        $data['title'] = 'Barang';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['barang'] = $this->db->get_where('barang')->result_array();

        $nama = ucwords($this->input->post('nama'));
        $kategori = $this->input->post('kategori');
        $stok = $this->input->post('stok');
        $harga = $this->input->post('harga');

        if ($this->form_validation->run('barang') == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/barang');
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nama' => $nama,
                'kategori' => $kategori,
                'stok' => $stok,
                'harga' => $harga
            ];
            $this->db->insert('barang', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Barang baru berhasil ditambahkan!</div>');
            redirect('admin/barang');
        }
    }

    public function barang_hapus($id)
    {
        $data['barang'] = $this->db->get_where('barang', ['id' => $id])->row_array();
        $this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">Barang ' . $data['barang']['nama'] . ' berhasil dihapus!</div>');
        $this->db->delete('barang', array('id' => $id));
        redirect('admin/barang');
    }

    public function pesanan()
    {
        $data['title'] = 'Barang';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['pesanan'] = $this->db->get('pesanan')->result_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/pesanan');
        $this->load->view('templates/footer');
    }
}
