<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends Backend_Controller {
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->rs = $this->db->get('admin')->result();
		$this->_render('admin/index', $this);
	}

	public function add()
	{
		$this->_render('admin/add');
	}

	public function edit($id)
	{
		$this->r = $this->db->where('admin_id', $id)->get('admin')->row();
		$this->_render('admin/edit', $this);
	}

	public function delete($id)
	{
		$this->db->where('admin_id', $id)->delete('admin');
		redirect('backend/admin');
	}

	public function do_save()
	{
		$config = array(
			array(
				'field' => 'username',
				'label' => 'Username',
				'rules' => 'required|is_unique[admin.username]',
			),
			array(
				'field' => 'password',
				'label' => 'Password',
				'rules' => 'required',
			),
			array(
				'field' => 'name',
				'label' => 'Name',
				'rules' => 'required',
			)
		);
		$this->form_validation->set_rules($config);
		if ($this->form_validation->run()) {
			$this->db->insert('admin', array(
				'name' => $this->input->post('name'),
				'username' => $this->input->post('username'),
				'password' => do_hash($this->input->post('password'))
			));
		}
		redirect('backend/admin');
	}

	public function do_edit()
	{
		$w = '';
		if ($this->input->post('username')!=$this->input->post('old_username')) {
			$w = '|is_unique[admin.username]';
		}
		$config = array(
			array(
				'field' => 'username',
				'label' => 'Username',
				'rules' => 'required'.$w,
			),
			array(
				'field' => 'name',
				'label' => 'Name',
				'rules' => 'required',
			)
		);
		$this->form_validation->set_rules($config);
		if ($this->form_validation->run()) {
			if ($this->input->post('password')!='') {
				$this->db->set('password', do_hash($this->input->post('password')));
			}
			$this->db->where('admin_id', $this->input->post('admin_id'))->update('admin', array(
				'name' => $this->input->post('name'),
				'username' => $this->input->post('username'),
			));
		}
		redirect('backend/admin');
	}
}
