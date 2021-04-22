<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DataCenter extends CI_Controller
{
    /*
    | -------------------------------------------------------------------
    | DataCenter Controller
    | -------------------------------------------------------------------
    | 
    | Function constructor
    | If username empty you can not inside to app
    |
    */
    public function __construct()
    {
        parent::__construct();
        $username = $this->session->userdata('username');
        $this->load->model('User_Model', 'user_model');
        if (empty($username)) {
            redirect('auth');
        }
    }

    /*
    | -------------------------------------------------------------------
    | DataCenter Controller
    | -------------------------------------------------------------------
    | 
    | Function index
    | Get data session for header and dashboard
    |
    */
    public function index()
    {
        $data['role'] = $this->db->get_where('tb_user', ['role_id' => 9])->row_array();
        $data['username'] = $this->session->userdata('username');
        $data['a'] = $this->user_model->counting();
        $data['c'] = $this->user_model->counting_active('active', 1);
        $data['d'] = $this->user_model->counting_active('active', 0);
        $this->load->view('template/template_header', $data);
        $this->load->view('main', $data);
        $this->load->view('template/template_footer');
    }

    /*
    | -------------------------------------------------------------------
    | DataCenter Controller
    | -------------------------------------------------------------------
    | 
    | Function data_akun
    | Get all data account for showing to the table 
    |
    */
    public function data_akun()
    {
        $data['get_data_all'] = $this->db->get('tb_user')->result_array();
        $data['role'] = $this->db->get_where('tb_user', ['role_id' => 9])->row_array();
        $data['username'] = $this->session->userdata('username');
        $this->load->view('template/template_header', $data);
        $this->load->view('data_akun', $data);
        $this->load->view('template/template_footer');
    }

    /*
    | -------------------------------------------------------------------
    | DataCenter Controller
    | -------------------------------------------------------------------
    | 
    | Function input_data_akun 
    | showing form for input new data account
    |
    */
    public function input_data_akun()
    {
        $data['role'] = $this->db->get_where('tb_user', ['role_id' => 9])->row_array();
        $data['username'] = $this->session->userdata('username');
        $this->load->view('template/template_header', $data);
        $this->load->view('input_data_akun');
        $this->load->view('template/template_footer');
    }

    /*
    | -------------------------------------------------------------------
    | DataCenter Controller
    | -------------------------------------------------------------------
    | 
    | Function input
    | This function in use for input new data account 
    |
    */
    public function input()
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
            redirect('datacenter/input_data_akun');
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

            $result = $this->db->insert('tb_user', $data);
            if ($result) {
                $this->session->set_flashdata(
                    'massage',
                    '<div class="alert alert-success alert-dismissable fade show" role="alert">
                        Success created account
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>'
                );
                redirect('datacenter/input_data_akun');
            } else {
                $this->session->set_flashdata(
                    'massage',
                    '<div class="alert alert-success alert-dismissable fade show" role="alert">
                        Failed created account
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>'
                );
                redirect('datacenter/input_data_akun');
            }
        }
    }

    /*
    | -------------------------------------------------------------------
    | DataCenter Controller
    | -------------------------------------------------------------------
    | 
    | Function update
    | This function in use for set active or no  
    | For account
    |
    */
    public function update($id)
    {
        // get data from input field
        $data = [
            'active' => $this->input->post('active')
        ];
        $result = $this->db->update('tb_user', $data, ['id_user' => $id]);
        if ($result) {
            $this->session->set_flashdata(
                'massage',
                '<div class="alert alert-success alert-dismissable fade show" role="alert">
                    Success update account
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );
            redirect('datacenter/data_akun');
        } else {
            $this->session->set_flashdata(
                'massage',
                '<div class="alert alert-success alert-dismissable fade show" role="alert">
                    Failed update account
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );
            redirect('datacenter/data_akun');
        }
    }

    /*
    | -------------------------------------------------------------------
    | DataCenter Controller
    | -------------------------------------------------------------------
    | 
    | Function delete
    | This function in use for delete account  
    |
    */
    public function delete($id)
    {
        // Delet data from id user
        $this->db->delete('tb_user', ['id_user' => $id]);
        $this->session->set_flashdata(
            'massage',
            '<div class="alert alert-success alert-dismissable fade show" role="alert">
                    Success deleted account
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
        );
        redirect('datacenter/data_akun');
    }
}
