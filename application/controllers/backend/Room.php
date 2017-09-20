<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Room extends Backend_Controller {
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->rs = $this->db->join('category', 'rooms.category_id = category.category_id', 'LEFT')->get('rooms')->result();
        $this->_render('room/index', $this);
    }
    public function add()
    {
        $this->category = $this->db->select('category_id, category_name')->get('category')->result();
        $this->_render('room/add', $this);
    }

    public function edit($room_id)
    {
        $this->category = $this->db->select('category_id, category_name')->get('category')->result();
        $this->r = $this->db->where('room_id', $room_id)->get('rooms')->row();
        $this->_render('room/edit', $this);
    }

    public function gallery($room_id)
    {
        $this->r = $this->db->where('room_id', $room_id)->get('rooms')->row();
        $this->gallery =  $this->db->where('room_id', $room_id)->get('gallery')->result();
        $this->_render('room/gallery', $this);
    }

    public function delete_gallery($room_id, $gallery_id)
    {
        $this->db->where('gallery_id', $gallery_id)->delete('gallery');
        redirect('backend/room/gallery/'.$room_id);
    }

    public function do_gallery()
    {
        $this->load->library('upload');
        $config = array(
          'upload_path' => './public/upload/room/',
          'allowed_types' => 'jpg|jpeg|png|gif',
          'file_name' => 'room-gallery-'.time(),
        );
        $this->upload->initialize($config);
        if ($this->upload->do_upload('gallery_path')) {
            $data = $this->upload->data();
            $this->db->insert('gallery', array(
              'gallery_path' => $data['file_name'],
              'room_id' => $this->input->post('room_id')
            ));
        }
        redirect('backend/room/gallery/'.$this->input->post('room_id'));

    }

    public function delete($id)
    {
        $this->db->where('room_id', $id)->delete('rooms');
        redirect('backend/room');
    }


    public function do_save()
    {
        $config = array(
            array(
                'field' => 'room_name[]',
                'label' => 'ชื่อ',
                'rules' => 'required',
            ),

        );
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run()) {
            $this->db->insert('rooms', array(
                'room_name' => serialize($this->input->post('room_name')),
                'room_no' => $this->input->post('room_no'),
                'room_short' => serialize($this->input->post('room_short')),
                'room_price' => $this->input->post('room_price'),
                'category_id' => $this->input->post('category_id'),
                'room_description' => serialize($this->input->post('room_description')),
                'room_total' => $this->input->post('room_total'),
                'room_status' => $this->input->post('room_status'),
                'seo_title' => serialize($this->input->post('seo_title')),
                'seo_keywords' => serialize($this->input->post('seo_keywords')),
                'seo_description' => serialize($this->input->post('seo_description')),
            ));
            $room_id = $this->db->insert_id();

            $this->load->library('upload');
            $config = array(
              'upload_path' => './public/upload/room/',
              'allowed_types' => 'jpg|jpeg|png|gif',
              'file_name' => 'room-main-'.$room_id,
            );
            $this->upload->initialize($config);
            if ($this->upload->do_upload('room_image')) {
                $data = $this->upload->data();
                $this->db->where('room_id', $room_id)->update('rooms', array(
                  'room_image' => $data['file_name'],
                ));
            }
        }
        redirect('backend/room');
    }

    public function do_edit()
    {
        $config = array(
            array(
                'field' => 'room_name[]',
                'label' => 'ชื่อ',
                'rules' => 'required',
            ),

        );
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run()) {
            $this->db->where('room_id', $this->input->post('room_id'))->update('rooms', array(
                 'room_name' => serialize($this->input->post('room_name')),
                'room_no' => $this->input->post('room_no'),
                'room_short' => serialize($this->input->post('room_short')),
                'room_price' => $this->input->post('room_price'),
                'category_id' => $this->input->post('category_id'),
                'room_description' => serialize($this->input->post('room_description')),
                'room_total' => $this->input->post('room_total'),
                'room_status' => $this->input->post('room_status'),
                'seo_title' => serialize($this->input->post('seo_title')),
                'seo_keywords' => serialize($this->input->post('seo_keywords')),
                'seo_description' => serialize($this->input->post('seo_description')),
            ));
            $room_id = $this->input->post('room_id');

            $this->load->library('upload');
            $config = array(
              'upload_path' => './public/upload/room/',
              'allowed_types' => 'jpg|jpeg|png|gif',
              'file_name' => 'room-main-'.$room_id,
            );
            $this->upload->initialize($config);
            if ($this->upload->do_upload('room_image')) {
                $data = $this->upload->data();
                $this->db->where('room_id', $room_id)->update('rooms', array(
                  'room_image' => $data['file_name'],
                ));
            }
        }
        redirect('backend/room');
    }
}