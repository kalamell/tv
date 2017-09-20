<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        //echo do_hash('admin@@');
    }

    public function index()
    {
        redirect('backend/auth/login');
    }

    public function login()
    {
        $this->load->view('backend/auth/login');
    }

    public function do_login()
    {
        $this->load->library('form_validation');

        $config = array(
            array(
                'field' => 'username',
                'label' => 'Username',
                'rules' => 'required',
            ),
            array(
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required'
            )
        );
        $this->form_validation->set_rules($config);

        if ($this->form_validation->run()) {
            $rs = $this->db->where(array(
                'username' => $this->input->post('username'),
                'password' => do_hash($this->input->post('password'))
            ))->get('admin');

            if ($rs->num_rows()>0) {
                $this->db->set('last_login', 'NOW()', FALSE)->where('admin_id', $rs->row()->admin_id)->update('admin');
                $this->session->set_userdata('login', $rs->row()->admin_id);
            }
        }
        redirect('backend');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('backend/auth');
    }
}
