<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bank extends Backend_Controller {
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->rs = $this->db->get('bank')->result();
        $this->_render('bank/index', $this);
    }

    public function add()
    {
        $this->_render('bank/add');
    }

    public function edit($id)
    {
        $this->r = $this->db->where('bank_id', $id)->get('bank')->row();
        $this->_render('bank/edit', $this);
    }


    public function do_save()
    {
        $config = array(
            array(
                'field' => 'bank_name',
                'label' => 'bank_name',
                'rules' => 'required',
            ),
            array(
                'field' => 'bank_code',
                'label' => 'bank_code',
                'rules' => 'required',
            ),
            array(
                'field' => 'bank_branch',
                'label' => 'bank_branch',
                'rules' => 'required',
            )
        );
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run()) {
            $this->db->insert('bank', array(
                'bank_name' => $this->input->post('bank_name'),
                'bank_code' => $this->input->post('bank_code'),
                'bank_branch' => $this->input->post('bank_branch')
            ));
        }
        redirect('backend/bank');
    }

    public function do_edit()
    {
        $config = array(
            array(
                'field' => 'bank_id',
                'label' => 'ID',
                'rules' => 'required'
            ),
            array(
                'field' => 'bank_name',
                'label' => 'bank_name',
                'rules' => 'required',
            ),
            array(
                'field' => 'bank_code',
                'label' => 'bank_code',
                'rules' => 'required',
            ),
            array(
                'field' => 'bank_branch',
                'label' => 'bank_branch',
                'rules' => 'required',
            )
        );
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run()) {
            $this->db->where('bank_id', $this->input->post('bank_id'))->update('bank', array(
                'bank_name' => $this->input->post('bank_name'),
                'bank_code' => $this->input->post('bank_code'),
                'bank_branch' => $this->input->post('bank_branch')
            ));
        }
        redirect('backend/bank');
    }
    public function delete($id)
    {
        $this->db->where('bank_id', $id)->delete('bank');
        redirect('backend/bank');
    }
}
