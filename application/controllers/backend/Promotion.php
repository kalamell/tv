<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Promotion extends Backend_Controller {
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
       $this->rs = $this->db->order_by('content_id', 'DESC')
       ->join('rooms', 'content.room_id = rooms.room_id', 'LEFT')
       ->where('content_type', 'promotion')
       ->get('content')->result();
        $this->_render('promotion/index', $this);
    }
    public function add()
    {
        $this->rs = $this->db->get('rooms')->result();
        $this->_render('promotion/add', $this);
    }

    public function edit($content_id)
    {
        $this->category = $this->db->select('category_id, category_name')->get('category')->result();
        $this->rs = $this->db->get('rooms')->result();
        $this->r = $this->db->where('content_id', $content_id)->get('content')->row();
        $this->_render('promotion/edit', $this);
    }

    public function delete($id)
    {
        $this->db->where('content_id', $id)->delete('content');
        redirect('backend/promotion');
    }


    public function do_save()
    {
        $config = array(
            array(
                'field' => 'content_name',
                'label' => 'ชื่อ',
                'rules' => 'required',
            ),

        );
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run()) {
            $this->db->set('create_date', 'NOW()', FALSE)->insert('content', array(
                'content_name' => $this->input->post('content_name'),
                'content_short' => $this->input->post('content_short'),
                'content_description' => $this->input->post('content_description'),
                'content_type' => 'promotion',
                'room_id' => $this->input->post('room_id'),
                'recommend' => $this->input->post('recommend'),
            ));
            $content_id = $this->db->insert_id();

            $this->load->library('upload');
            $config = array(
              'upload_path' => './public/upload/content/',
              'allowed_types' => 'jpg|jpeg|png|gif',
              'file_name' => 'content-main-'.$content_id,
            );
            $this->upload->initialize($config);
            if ($this->upload->do_upload('content_path')) {
                $data = $this->upload->data();
                $this->db->where('content_id', $content_id)->update('content', array(
                  'content_path' => $data['file_name'],
                ));
            }
        }
        redirect('backend/promotion');
    }

    public function do_edit()
    {
        $config = array(
            array(
                'field' => 'content_name',
                'label' => 'ชื่อ',
                'rules' => 'required',
            ),

        );
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run()) {
            $this->db->where('content_id', $this->input->post('content_id'))->update('content', array(
                'content_name' => $this->input->post('content_name'),
                'content_short' => $this->input->post('content_short'),
                'content_description' => $this->input->post('content_description'),
                'content_type' => 'promotion',
                'room_id' => $this->input->post('room_id'),
                'recommend' => $this->input->post('recommend'),
            ));
            $content_id = $this->input->post('content_id');

            $this->load->library('upload');
            $config = array(
              'upload_path' => './public/upload/content/',
              'allowed_types' => 'jpg|jpeg|png|gif',
              'file_name' => 'content-main-'.$content_id,
            );
            $this->upload->initialize($config);
            if ($this->upload->do_upload('content_path')) {
                $data = $this->upload->data();
                $this->db->where('content_id', $content_id)->update('content', array(
                  'content_path' => $data['file_name'],
                ));
            }
        }
        redirect('backend/promotion');
    }
}