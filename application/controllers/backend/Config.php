<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Config extends Backend_Controller {
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->r = $this->db->get('config')->row();
		$this->_render('config', $this);
	}

	public function save()
	{
		$this->db->update('config', array(
			'title' => serialize($this->input->post('title')),
			'about' => serialize($this->input->post('about')),
			'description' => serialize($this->input->post('description')),
			'keywords' => serialize($this->input->post('keywords')),
			'footer' => serialize($this->input->post('footer')),
			'mobile' => $this->input->post('mobile'),
			'ig' => $this->input->post('ig'),
			'line' => $this->input->post('line'),
			'twitter' => $this->input->post('twitter'),
			'facebook' => $this->input->post('facebook'),
			'google' => $this->input->post('google'),
			'auto_verify' => $this->input->post('auto_verify'),
			'email' => $this->input->post('email'),
			'paypal_email' => $this->input->post('paypal_email'),
			'latitude' => $this->input->post('latitude'),
			'longtitude' => $this->input->post('longtitude'),
			'address' => serialize($this->input->post('address')),
			'slogan' => serialize($this->input->post('slogan')),
		));

		$this->load->library('upload');
		$config = array(
			'upload_path' => './public/upload/',
			'allowed_types' => 'jpg|jpeg|png|gif',
			'file_name' => 'logo',
		);
		$this->upload->initialize($config);

		if ($this->upload->do_upload('logo')) {
			$data = $this->upload->data();
			$this->db->update('config', array(
				'logo' => $data['file_name'],
			));
		}
		redirect('backend/config');
	}
}
