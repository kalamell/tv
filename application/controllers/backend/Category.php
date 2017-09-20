<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends Backend_Controller {
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->rs = $this->db->get('category')->result();
        $this->_render('category/index', $this);
    }

    public function add()
    {
        $this->_render('category/add');
    }

    public function edit($id)
    {
        $this->r = $this->db->where('category_id', $id)->get('category')->row();
        $this->_render('category/edit', $this);
    }


    public function do_save()
    {
        $config = array(
            array(
                'field' => 'category_name[]',
                'label' => 'category_name',
                'rules' => 'required',
            ),
        );
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run()) {
            $this->db->insert('category', array(
                'category_name' => serialize($this->input->post('category_name')),
                'category_detail' => serialize($this->input->post('category_detail'))
            ));
        }
        redirect('backend/category');
    }

    public function do_edit()
    {
        $config = array(
            array(
                'field' => 'category_id',
                'label' => 'ID',
                'rules' => 'required'
            ),
            array(
                'field' => 'category_name[]',
                'label' => 'category_name',
                'rules' => 'required',
            ),
        );
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run()) {
            $this->db->where('category_id', $this->input->post('category_id'))->update('category', array(
                'category_name' => serialize($this->input->post('category_name')),
                'category_detail' => serialize($this->input->post('category_detail'))
            ));
        }
        redirect('backend/category');
    }
    public function delete($id)
    {
        $this->db->where('category_id', $id)->delete('category');
        redirect('backend/category');
    }
}
