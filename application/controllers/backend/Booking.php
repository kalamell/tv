<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends Backend_Controller {
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->_render('booking/index', $this);
    }

    public function event($id)
    {
        $this->r = $this->db->where('booking_id', $id)->join('rooms', 'booking.room_id = rooms.room_id')->get('booking')->row();
        $this->_render('booking/event', $this);
    }

    public function do_save()
    {
        $this->db->where('booking_id', $this->input->post('booking_id'))->update('booking', array(
            'booking_status' => $this->input->post('booking_status')
        ));
        redirect('backend/booking/event/'.$this->input->post('booking_id'));
    }
}