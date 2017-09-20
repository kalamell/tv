<?php
class Content extends Base_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->content = $this->db->where('content_type', 'content')->order_by('content_id', 'DESC')->get('content')->result();
        $this->others = $this->db->where('content_type', 'content')->order_by('content_id', 'RANDOM')->get('content')->result();
        $this->render('content/index', $this);

    }

    public function id($id, $url)
    {
        $r = $this->db->where('content_id', $id)->get('content');
        if ($r->num_rows()==0) redirect('');
        $this->r = $r->row();
        $this->others = $this->db->where('content_id !=', $id)->where('content_type', 'content')->limit(5)->get('content')->result();
        $this->render('content/view', $this);
    }
}