<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends Backend_Controller {
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->booking = $this->db->join('rooms', 'booking.room_id = rooms.room_id')->order_by('booking_id', 'DESC')->get('booking')->result();
        $this->_render('main', $this);
    }
    public function _404()
    {
        $this->load->view('404');
    }
}
