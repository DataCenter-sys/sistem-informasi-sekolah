<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Register Page';
        $this->load->view('auth/register', $data);
    }

    /*
    | -------------------------------------------------------------------
    | Auth Controller
    | -------------------------------------------------------------------
    | 
    | Function Save Data Registration
    | 
    |
    */
    public function save()
    {
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|is_unique[tb_user.email]');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|is_unique[tb_user.username]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]|max_length[12]');
        $this->form_validation->set_rules('password2', 'Password2', 'trim|required|matches[password]');

        if ($this->form_validation->run() === false) {
            $this->session->set_flashdata(
                'massage',
                '<div class="alert alert-danger alert-dismissable fade show" role="alert">
                    Gagal membuat akun, pastikan username dan email tidak boleh sama, dan password min 8 character, max 12 character !
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );
            redirect('auth');
        } else {
            $data = [
                'name' => htmlspecialchars($this->input->post('name')),
                'email' => htmlspecialchars($this->input->post('email')),
                'username' => htmlspecialchars($this->input->post('username')),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'role_id' => $this->input->post('role_id'),
                'image' => 'default.jpg',
                'active' => '0',
                'date_created' => time()
            ];

            $this->db->insert('tb_user', $data);
            $this->session->set_flashdata(
                'massage',
                '<div class="alert alert-success alert-dismissable fade show" role="alert">
                    Success created account
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );
            redirect('auth');
        }



        // $this->form_validation->set_rules('name', 'Name', 'trim|required');
        // $this->form_validation->set_rules('username', 'Username', 'trim|required|is_unique[user.username]', [
        //     'is_unique' => 'Username already exist'
        // ]);
        // $this->form_validation->set_rules('email', 'Email', 'trim|required|is_unique[user.email]', [
        //     'is_unique' => 'Email already exist'
        // ]);
        // $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]|max_length[12]', [
        //     'min_length' => 'Password minimal 8 character',
        //     'max_length' => 'Password maximal 12 character'
        // ]);
        // $this->form_validation->set_rules('password2', 'Password2', 'trime|required|matches[password]');

        // if ($this->form_validation->run() === FALSE) {
        //     $data['title'] = 'Login Page';
        //     $this->load->view('auth/auth', $data);
        // } else {
        //     // Initialize
        //     $name = htmlspecialchars($this->input->post('name'));
        //     $email = htmlspecialchars($this->input->post('username'));
        //     $username = htmlspecialchars($this->input->post('username'));
        //     $password = password_hash($this->input->post('username'), PASSWORD_DEFAULT);
        //     $role_id = $this->input->post('unit');
        //     $is_active = '0';
        //     $image = 'default.jpg';
        //     $date_created = time();

        //     $data = [
        //         'name' => $name,
        //         'email' => $email,
        //         'username' => $username,
        //         'password' => $password,
        //         'image' => $image,
        //         'role_id' => $role_id,
        //         'is_active' => $is_active,
        //         'date_created' => $date_created
        //     ];

        //     $this->db->insert('user', $data);
        //     $this->session->set_flashdata(
        //         'massage',
        //         '<div class="alert alert-success alert-dismissable fade show" role="alert">
        //             Success created account
        //             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        //                 <span aria-hidden="true">&times;</span>
        //             </button>
        //         </div>'
        //     );
        //     redirect('auth/auth');
        // }
    }
}
