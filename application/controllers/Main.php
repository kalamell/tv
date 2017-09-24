<?php
class Main extends Base_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->banner = $this->db->get('banner')->result();
      //  $this->rooms = $this->db->get('rooms')->result();
      //  $this->gallery = $this->db->join('rooms', 'gallery.room_id = rooms.room_id', 'LEFT')->get('gallery')->result();
      //  $this->content = $this->db->where('content_type', 'content')->order_by('content_id', 'DESC')->get('content')->result();
        $this->category = $this->db->get('category')->result();
        $this->render('main', $this);
    }

    public function lang($lang = 'th')
    {
        $this->session->set_userdata('lang', $lang);
        redirect();
    }
}