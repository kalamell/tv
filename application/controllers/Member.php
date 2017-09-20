<?php
class Member extends Base_Controller
{
    private $member_id = null;
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('member_id')) redirect('auth/login');
        $this->member_id = $this->session->userdata('member_id');
    }

    public function index()
    {
        $this->r = $this->db->where('member_id', $this->member_id)->get('member')->row();
        $this->render('member/editprofile', $this);
    }
    public function editprofile()
    {
       $this->r = $this->db->where('member_id', $this->member_id)->get('member')->row();
        $this->render('member/editprofile', $this);
    }

    public function do_update()
    {
        $config = array(
            array(
                'field' => 'name',
                'label' => 'name',
                'rules' => 'required'
            ),
            array(
                'field' => 'mobile',
                'label' => 'mobile',
                'rules' => 'required'
            ),
        );
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run()) {
            if ($this->input->post('password')!=NULL) {
                $this->db->set('password', do_hash( $this->input->post('password') ));
            }
            $this->db->where('member_id', $this->member_id)->update('member', array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'mobile' => $this->input->post('mobile'),
            ));
            $this->session->set_flashdata('save', 1);
        }
        redirect('member/editprofile');
    }

    public function history()
    {
        $this->rs = $this->db->where('member_id', $this->member_id)->join('rooms', 'booking.room_id = rooms.room_id')->order_by('booking_id', 'DESC')->get('booking')->result();
        $this->render('member/history', $this);
    }
}