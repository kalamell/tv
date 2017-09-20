<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends Backend_Controller {
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->rs = $this->db->get('contact')->result();
        $this->_render('contact/index', $this);
    }
}