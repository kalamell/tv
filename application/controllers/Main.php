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
        $ar = array(
            840, 702, 764
        );
        $this->countries = $this->db->where_in('num_code', $ar
        )->get('countries')->result();
        $this->rooms = $this->db->get('rooms')->result();
      //  $this->gallery = $this->db->join('rooms', 'gallery.room_id = rooms.room_id', 'LEFT')->get('gallery')->result();
      //  $this->content = $this->db->where('content_type', 'content')->order_by('content_id', 'DESC')->get('content')->result();
        $this->category = $this->db->get('category')->result();
        $this->render('main', $this);
    }

    public function lang($lang = 'th')
    {
        $this->session->set_userdata('lang', $lang);
        $current_url = $this->session->userdata('current_url')?$this->session->userdata('current_url'):'';
        redirect($current_url);
    }

    public function about()
    {
        $this->session->set_userdata('current_url', current_url());
        $this->render('about', $this);
    }

    public function package()
    {
        $this->session->set_userdata('current_url', current_url());
        $this->category = $this->db->get('category')->result();
        $this->rooms = $this->db->get('rooms')->result();
        $this->render('package', $this);
    }

    public function category($categoroy_id = '' )
    {
        $this->session->set_userdata('current_url', current_url());
        $this->categories = $this->db->get('category')->result();
        if ($categoroy_id!='') {
            $this->db->where('category_id', $categoroy_id);
        }
        $this->rooms = $this->db->get('rooms')->result();
        $this->render('category', $this);
    }

    public function do_search()
    {
        if ($this->input->post('s')) {
            $this->session->set_userdata('s', $this->input->post('s'));
        }
        if ($this->input->post('category_id')) {
            $this->session->set_userdata('category_id', $this->input->post('category_id'));
        }

        if ($this->input->post('from_date')) {
            $this->session->set_userdata('from_date', $this->input->post('from_date'));
        }

        if ($this->input->post('to_date')) {
            $this->session->set_userdata('to_date', $this->input->post('to_date'));
        }

        if ($this->input->post('price')) {
            $this->session->set_userdata('price', $this->input->post('price'));
        }
        redirect('main/search');
    }

    public function search()
    {
        $this->rooms = $this->db->get('rooms')->result();
        $this->category = $this->db->get('category')->result();
        $this->render('search', $this);
    }
}