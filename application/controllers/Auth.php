<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[8]', [
            'min_length' => 'Password Minimal 8 character'
        ]);

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('auth/auth');
        }
    }

    /*
    | -------------------------------------------------------------------
    | Auth Controller
    | -------------------------------------------------------------------
    | 
    | Function Sign In App
    | 
    |
    */
    public function login()
    {
        // Model Database
        // $this->load->model('User_Model', 'users');

        $username = htmlspecialchars($this->input->post('username'));
        $password = $this->input->post('password');

        $login = $this->db->get_where('tb_user', ['username' => $username])->row_array();
        if ($login) {
            if ($login['username'] == $username) {
                if (password_verify($password, $login['password'])) {
                    if ($login['active'] == 1) {
                        $data = [
                            'name' => $login['name'],
                            'username' => $login['username'],
                            'role_id' => $login['role_id']
                        ];
                        $this->session->set_userdata($data);

                        if ($login['role_id'] == 1) {
                            $this->session->set_userdata($data);
                            // Direct to app for smk
                            // redirect('dashboard');
                        } elseif ($login['role_id'] == 2) {
                            $this->session->set_userdata($data);
                            // Direct to app for smk
                            // redirect('dashboard');
                        } elseif ($login['role_id'] == 3) {
                            $this->session->set_userdata($data);
                            // Direct to app for smk
                            redirect('tatausaha/dashboard_smk', $data);
                        } elseif ($login['role_id'] == 9) {
                            $this->session->set_userdata($data);
                            // Direct to app for smk
                            redirect('datacenter', $data);
                        }
                    } else {
                        $this->session->set_flashdata(
                            'massage',
                            '<div class="alert alert-danger alert-dismissable fade show" role="alert">
                                Akun anda belum aktif, silahkan anda aktifkan terlebih dahulu di DATA CENTER 
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>'
                        );
                        redirect('auth');
                    }
                } else {
                    $this->session->set_flashdata(
                        'massage',
                        '<div class="alert alert-danger alert-dismissable fade show" role="alert">
                            Password salah, silahkan coba kembali 
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>'
                    );
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata(
                    'massage',
                    '<div class="alert alert-danger alert-dismissable fade show" role="alert">
                    Username salah, silahkan coba kembali 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
                );
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata(
                'massage',
                '<div class="alert alert-danger alert-dismissable fade show" role="alert">
                    Username dan Password Tidak Di Temukan 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );
            redirect('auth');
        }
    }

    /*
    | -------------------------------------------------------------------
    | Logout Controller
    | -------------------------------------------------------------------
    | 
    | Function Sign Out App
    | 
    |
    */
    public function logout()
    {
        $this->session->sess_destroy();
        session_destroy();
        redirect(base_url());
    }
}
