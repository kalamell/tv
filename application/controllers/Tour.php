<?php
class Tour extends Base_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function id($id)
    {

    }

    public function item($id, $room_url)
    {
        $this->session->set_userdata('url', current_url());

        $this->r = $this->db->where('room_id', $id)->join('category', 'rooms.category_id = category.category_id')->get('rooms')->row();
        $this->gallery =  $this->db->where('room_id', $id)->get('gallery')->result();
        $this->render('room/item', $this);
    }

    public function category($id = '', $category_name = '')
    {
        if ($id=='') {
            $this->title = line('our rooms');
            if ($this->session->flashdata('room_name')) {
                $this->db->like('room_name', $this->session->flashdata('room_name'));
                $this->title = line('search').' : '.$this->session->flashdata('room_name');
            }
           $this->rooms = $this->db->join('category', 'rooms.category_id = category.category_id')->get('rooms')->result();

        } else {
            $r = $this->db->where('category_id', $id)->get('category')->row();
            $lang = $this->session->userdata('lang');
            $category_name = unserialize($r->category_name);
            $this->title = $category_name[$lang];
           $this->rooms = $this->db->where('rooms.category_id', $id)->join('category', 'rooms.category_id = category.category_id')->get('rooms')->result();
        }
        $this->render('room/category', $this);

    }

    public function do_contact()
    {
        $config = array(
            array(
                'field' => 'name',
                'label' => 'Name',
                'rules' => 'required'
            ),
            array(
                'field' => 'email',
                'label' => 'email',
                'rules' => 'required|valid_email'
            )
        );
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run()) {
            $r = $this->db->where('room_id', $this->input->post('room_id'))->get('rooms')->row();
            $this->db->set('create_date', 'NOW()', false)->insert('contact', array(
                'name' => $this->input->post('name'),
                'subject' => 'สอบถามข้อมูลห้อง '.$r->room_name,
                'email' => $this->input->post('email'),
                'message' => $this->input->post('message'),
                'mobile' => $this->input->post('mobile'),
                'ip' => $this->input->ip_address(),
                'contact_type' => 'room',
                'room_id' => $this->input->post('room_id')
            ));
        }
        echo 'ok';

    }
    public function do_search()
    {
        $this->session->set_flashdata('room_name', $this->input->post('name'));
        redirect('room/category');
    }
}