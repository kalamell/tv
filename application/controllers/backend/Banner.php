<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Banner extends Backend_Controller {
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->rs = $this->db->where('position', 'home')->get('banner')->result();
		$this->_render('banner/index', $this);
	}

  public function add()
  {
    $this->room = $this->db->where('room_status', 'Y')->get('rooms')->result();
    $this->_render('banner/add', $this);
  }

  public function edit($banner_id)
  {
    $this->r = $this->db->where('banner_id', $banner_id)->get('banner')->row();
    $this->room = $this->db->where('room_status', 'Y')->get('rooms')->result();
    $this->_render('banner/edit', $this);
  }

  public function delete($banner_id)
  {
    $this->db->where('banner_id', $banner_id)->delete('banner');
    redirect('backend/banner');
  }

  public function do_save()
	{
		$config = array(
			array(
				'field' => 'banner_head',
				'label' => 'ชื่อหัวข้อ',
				'rules' => 'required',
			),

		);
		$this->form_validation->set_rules($config);
		if ($this->form_validation->run()) {
			$this->db->insert('banner', array(
				'banner_head' => $this->input->post('banner_head'),
				//'banner_title' => $this->input->post('banner_title'),
				'banner_description' => $this->input->post('banner_description'),
				'link' => $this->input->post('link'),
                'room_id' => $this->input->post('room_id'),
			));
      $banner_id = $this->db->insert_id();

      $this->load->library('upload');
      $config = array(
        'upload_path' => './public/upload/banner/',
        'allowed_types' => 'jpg|jpeg|png|gif',
        'file_name' => 'banner'.time(),
      );
      $this->upload->initialize($config);

      if ($this->upload->do_upload('banner_image')) {
        $data = $this->upload->data();
        $this->db->where('banner_id', $banner_id)->update('banner', array(
          'banner_image' => $data['file_name'],
        ));
      }

		}
		redirect('backend/banner');
	}

  public function do_edit()
	{
		$config = array(
      array(
				'field' => 'banner_id',
				'label' => 'ID',
				'rules' => 'required',
			),
			array(
				'field' => 'banner_head',
				'label' => 'ชื่อหัวข้อ',
				'rules' => 'required',
			),

		);
		$this->form_validation->set_rules($config);
		if ($this->form_validation->run()) {
			$this->db->where('banner_id', $this->input->post('banner_id'))->update('banner', array(
				'banner_head' => $this->input->post('banner_head'),
				//'banner_title' => $this->input->post('banner_title'),
				'banner_description' => $this->input->post('banner_description'),
				'link' => $this->input->post('link'),
                'room_id' => $this->input->post('room_id'),
			));
      $banner_id = $this->input->post('banner_id');

      $this->load->library('upload');
      $config = array(
        'upload_path' => './public/upload/banner/',
        'allowed_types' => 'jpg|jpeg|png|gif',
        'file_name' => 'banner'.time(),
      );
      $this->upload->initialize($config);

      if ($this->upload->do_upload('banner_image')) {
        $data = $this->upload->data();
        $this->db->where('banner_id', $banner_id)->update('banner', array(
          'banner_image' => $data['file_name'],
        ));
      }

		}
		redirect('backend/banner');
	}
}
