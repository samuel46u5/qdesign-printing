<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        // if ($this->session->userdata('email')) {

        //     redirect('user');
        // }

        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $data['title']  = 'Qdesign - Login';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        } else {
            //validasi sukses
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        //jika usernya ada
        if ($user) {
            //jika usernya aktif
            if ($user['is_active'] == 1) {
                //cek pasword
                if (password_verify($password, $user['password'])) {
                    //jika password benar
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['role_id'] == 1) {
                        redirect('admin');
                    } else {

                        redirect('user');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class=" alert alert-danger" role="alert">Wrong password or username!</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class=" alert alert-danger" role="alert">This email has not been actived! </div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class=" alert alert-danger" role="alert">Email is not registered! </div>');
            redirect('auth');
        }
    }

    public function registration()
    {

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', ['is_unique' => 'Email sudah digunakan']);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', ['matches' => 'password tidak sama!', 'min_length' => 'password minimal 3 karakter']);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password3]');

        if ($this->form_validation->run() == false) {
            $data['title']  = 'Qdesign - Registrasi';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/registration');
            $this->load->view('templates/auth_footer');
        } else {
            $email = htmlspecialchars($this->input->post('email', true));
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => $email,
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()
            ];

            //siapkan token
            // $token = base64_encode(random_bytes(32));
            // $user_token = [
            //     'email' => $email,
            //     'token' => $token,
            //     'date_created' => time()
            // ];


            $this->db->insert('user', $data);
            // $this->db->insert('user_token', $user_token);
            // //setelah di register kirim email ke user ybs
            // $this->_sendEmail($token, 'verify');


            $this->session->set_flashdata('message', 'Data berhasil ditambahkan');
            redirect('auth');
        }
    }
}
