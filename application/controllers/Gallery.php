<?php
class Gallery extends Base_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->rooms = $this->db->get('rooms')->result();
        $this->gallery = $this->db->join('rooms', 'gallery.room_id = rooms.room_id')->get('gallery')->result();
        $this->render('gallery', $this);
    }
}