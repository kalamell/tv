<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Language extends Backend_Controller {
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->rs = $this->db->get('lang_static')->result();
        $this->_render('language/index', $this);
    }

    public function add()
    {
        $config = array(
            array(
                'field' => 'name',
                'rules' => 'required',
                'label' => 'Name'
            )
        );
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run()) {
            $this->db->insert('lang_static', array(
                'name' => $this->input->post('name'),
                'data' => serialize($this->input->post('data'))
            ));
        }
        redirect('backend/language');
    }

    public function update()
    {
        $config = array(
            array(
                'field' => 'name[]',
                'rules' => 'required',
                'label' => 'Name'
            )
        );
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run()) {
            $inp = $this->input->post('name');
            foreach($inp as $_id => $val) {
                $input = $this->input->post('data');
                $this->db->where('id', $_id)->update('lang_static', array(
                    'name' => $val,
                    'data' => serialize($input[$_id]),
                ));
            }
        }
        redirect('backend/language');
    }
    public function delete($id)
    {
        $this->db->where('id', $id)->delete('lang_static');
        redirect('backend/language');
    }
}