<?php
class Contact extends Base_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->render('contact');
    }

    public function do_save()
    {
        $config = array(
            array(
                'field' => 'name',
                'label' => 'Name',
                'rules' => 'required'
            ),
            array(
                'field' => 'subject',
                'label' => 'subject',
                'rules' => 'required'
            ),
            array(
                'field' => 'email',
                'label' => 'email',
                'rules' => 'required|valid_email'
            )
        );
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run()) {
            $this->db->set('create_date', 'NOW()', false)->insert('contact', array(
                'name' => $this->input->post('name'),
                'subject' => $this->input->post('subject'),
                'email' => $this->input->post('email'),
                'message' => $this->input->post('message'),
                'mobile' => $this->input->post('mobile'),
                'ip' => $this->input->ip_address()
            ));
            //$this->sessiono->set_flashdata('save', 1);
        }
        echo 'ok';
    }

    public function subscribe()
    {
        $config = array(
            array(
                'field' => 'email',
                'label' => 'email',
                'rules' => 'required|valid_email'
            )
        );
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run()) {
            $this->db->set('create_date', 'NOW()', false)->insert('subscribe', array(
                'email' => $this->input->post('email'),
                'ip' => $this->input->ip_address()
            ));
            //$this->sessiono->set_flashdata('save', 1);
        }
        echo 'ok';
    }
}