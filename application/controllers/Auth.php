<?php
class Auth extends Base_Controller
{
    public function __construct()
    {

        parent::__construct();

    }

    public function index()
    {
        $this->render('auth/login', $this);
    }

    public function login()
    {
        $this->render('auth/login', $this);
    }

    public function do_login()
    {
        $config = array(
            array(
                'field' => 'email',
                'label' => 'email',
                'rules' => 'required|valid_email'
            ),
            array(
                'field' => 'password',
                'label' => 'password',
                'rules' => 'required'
            )
        );
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run()) {
            $rs = $this->db->where( array(
                'email' => $this->input->post('email'),
                'password' => do_hash($this->input->post('password'))
            ))->get('member');
            if ($rs->num_rows()>0) {
                $this->session->set_userdata('member_id', $rs->row()->member_id);
                if ($this->session->userdata('url')) {
                    redirect($this->session->userdata('url'));
                    $this->session->set_userdata('url', '');
                }
                redirect('member/editprofile');
            } else {
                $this->session->set_flashdata('login_error', 1);
                redirect('auth/login');
            }
        }

        echo validation_errors();exit();
        redirect('auth/register');

    }

    public function register()
    {
        $this->render('auth/register', $this);
    }

    public function logout()
    {
        $this->session->set_userdata('member_id', '');
        redirect('');
    }

    public function do_register()
    {
        $config = array(
            array(
                'field' => 'email',
                'label' => 'email',
                'rules' => 'required|valid_email|is_unique[member.email]'
            ),
            array(
                'field' => 'password',
                'label' => 'password',
                'rules' => 'required'
            ),
            array(
                'field' => 'name',
                'label' => 'name',
                'rules' => 'required'
            ),
            array(
                'field' => 'mobile',
                'label' => 'mobile',
                'rules' => 'required'
            ),
        );
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run()) {
            $this->db->set('create_date', 'NOW()', false)->insert('member', array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'password' => do_hash($this->input->post('password')),
                'ip' => $this->input->ip_address(),
                'mobile' => $this->input->post('mobile'),
            ));
            $this->session->set_flashdata('register', 1);
            redirect('auth/login');
        }
        redierct('auth/register');
    }


}