<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Base_Controller extends CI_Controller {
    public function __construct()
    {
        parent::__construct();

        $base_url_str = current_url();

        $ex = explode('http:', $base_url_str);

        if ($ex[0]=='') {
            $secure_base_url = str_replace("http","https",$base_url_str );
            $sub = $this->input->server('QUERY_STRING')!=NULL?'?'.$this->input->server('QUERY_STRING'):'';
        //    redirect($secure_base_url.$sub);
        }



    }

    protected function render($view, $data = array())
    {
        //$this->load->view('_header', $data);
        $this->load->view($view, $data);
        //$this->load->view('_footer', $data);
    }

}
class Backend_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('login')) redirect('backend/auth/login');
    }

    protected function _render($file, $data = array())
    {
        $this->load->view('backend/_header', $data);
        $this->load->view('backend/'.$file, $data);
        $this->load->view('backend/_footer', $data);
    }
}