<?php
class Booking extends Base_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
    }

    public function do_booking()
    {
        if (!$this->session->userdata('member_id')) redirect('auth/login');

        $config = array(
            array(
                'field' => 'check_in',
                'label' => 'Check in',
                'rules' => 'required'
            ),
            array(
                'field' => 'check_out',
                'label' => 'Check Out',
                'rules' => 'required'
            ),
            array(
                'field' => 'room_id',
                'label' => 'Room ID',
                'rules' => 'required'
            ),
        );
        $this->form_validation->set_rules($config);
        if (!$this->form_validation->run()) redirect('room/category');
        $check_in = $this->input->post('check_in');
        $check_out = $this->input->post('check_out');
        $total = (int)$this->input->post('parent') + (int)$this->input->post('child');

        $sql = "SELECT * FROM rooms WHERE room_id = ? AND room_id NOT IN ( SELECT room_id FROM booking WHERE (DATE(check_in) BETWEEN ? AND ?) OR (DATE(check_out) BETWEEN ? AND ? ) AND booking_status !='cancel' )";
        $room = $this->db->query($sql, array($this->input->post('room_id'), $check_in, $check_out, $check_in, $check_out));


        if ($room->num_rows()>0) {
            $this->r = $this->db->where('room_id', $this->input->post('room_id'))->join('category', 'rooms.category_id = category.category_id')->get('rooms')->row();
            $this->gallery =  $this->db->where('room_id', $this->input->post('room_id'))->get('gallery')->result();
            $this->check_in = $check_in;
            $this->check_out = $check_out;
            $this->parent = $this->input->post('parent');
            $this->child = $this->input->post('child');

            $this->member = $this->db->where('member_id', $this->session->userdata('member_id'))->get('member')->row();

            $this->render('booking/item', $this);

        } else {
            $this->session->set_flashdata('exists', 1);

            $r = $this->db->where('room_id', $this->input->post('room_id'))->get('rooms')->row();
            $lang = $this->session->userdata('lang');
            $room_name = unserialize($r->room_name);
            redirect('room/item/'.$r->room_id.'/'.urldecode($room_name[$lang]));
        }
    }

    public function do_save_booking()
    {
        $config = array(
            array(
                'field' => 'room_id',
                'label' => 'Room ID',
                'rules' => 'required'
            )
        );
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run()) {
            if (!$this->session->userdata('member_id')) redirect('auth/login');

            $this->db->set('booking_date', 'NOW()', false)->insert('booking', array(
                'room_id' => $this->input->post('room_id'),
                'check_in' => $this->input->post('check_in').' 12:00:00',
                'check_out' => $this->input->post('check_out').' 12:00:00',
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'mobile' => $this->input->post('mobile'),
                'message' => $this->input->post('message'),
                'child' => $this->input->post('child'),
                'parent' => $this->input->post('parent'),
                'member_id' => $this->session->userdata('member_id')
            ));
            $this->session->set_flashdata('booking', 1);

            redirect('booking/id/'. $this->db->insert_id());

            /*$r = $this->db->where('room_id', $this->input->post('room_id'))->get('rooms')->row();
            $lang = $this->session->userdata('lang');
            $room_name = unserialize($r->room_name);
            redirect('room/item/'.$r->room_id.'/'.urldecode($room_name[$lang]));*/
        } else {
            redirect('');
        }

        //redirect('room/item/'.$r->room_id.'/'.urldecode($r->room_name));
    }

    public function id($booking_id)
    {
        if (!$this->session->userdata('member_id')) redirect('auth/login');

        $this->r = $this->db->where('member_id', $this->session->userdata('member_id'))->where('booking_id', $booking_id)->join('rooms', 'booking.room_id = rooms.room_id')->order_by('booking_id', 'DESC')->get('booking');

        if ($this->r->num_rows()==0) redirect('');
        $data['r'] = $this->r->row();
        $this->render('booking/order', $data);

    }

    public function search()
    {
        if ($this->session->userdata('date_start')) {
            $check_in = $this->session->userdata('date_start');
            $check_out = $this->session->userdata('date_end');
            $total = $this->session->userdata('total');

            $sql = "SELECT * FROM rooms WHERE room_total <= ? AND room_id NOT IN ( SELECT room_id FROM booking WHERE (DATE(check_in) BETWEEN ? AND ?) OR (DATE(check_out) BETWEEN ? AND ? ) AND booking_status !='cancel' )";
            $this->rooms = $this->db->query($sql, array($total, $check_in, $check_out, $check_in, $check_out))->result();
        } else {
            $sql = "SELECT * FROM rooms WHERE room_total <= ? AND room_id NOT IN ( SELECT room_id FROM booking WHERE (DATE(check_in) BETWEEN ? AND ?) OR (DATE(check_out) BETWEEN ? AND ? ) AND booking_status !='cancel' )";
            if ($this->session->userdata('total')) {
                 $total = $this->session->userdata('total');
                 $this->db->where('room_total <=', $total);
            }
            $this->rooms = $this->db->get('rooms')->result();
        }



        $this->render('booking/search', $this);
    }
    public function do_search()
    {
        $total = (int)$this->input->post('parent') + (int)$this->input->post('child');
        $this->session->set_userdata(array(
            'date_start' => $this->input->post('date_start'),
            'date_end' => $this->input->post('date_end'),
            'parent' => $this->input->post('parent'),
            'child' => $this->input->post('child'),
            'total' => $total
        ));
        redirect('booking/search');
    }

    public function do_pay()
    {
        $config = array(
            array(
                'field' => 'booking_id',
                'label' => 'booking_id',
                'rules' => 'required'
            )
        );
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run()) {
            $r = $this->db->where('member_id', $this->session->userdata('member_id'))->where('booking_id', $this->input->post('booking_id'))->join('rooms', 'booking.room_id = rooms.room_id')->order_by('booking_id', 'DESC')->get('booking');
            if ($r->num_rows()==0) redirect('');

            $r = $r->row();

            $token = do_hash(time().'-'.$this->input->post('booking_id').'-'.sprintf('%07d', $this->input->post('booking_id')));
            $this->db->where('booking_id', $this->input->post('booking_id'))->update('booking', array(
                'token' => $token
            ));

            $_rconfig = $this->db->select('paypal_email')->get('config')->row();
            $config['business']             = $_rconfig->paypal_email;
            //$config['business']               =
            $config['cpp_header_image']     = ''; //Image header url [750 pixels wide by 90 pixels high]
            $config['return']               =  site_url("booking/success/".$token);
            $config['cancel_return']        = site_url("booking/cancel/".$token);
            $config['notify_url']           = site_url("booking/ipn_listen");
            $config['production']           = TRUE; //Its false by default and will use sandbox
            $config["invoice"]              = "INV-".sprintf("%05d",$this->input->post('booking_id')); //The invoice id
            $config["currency_code"]        = "THB";
            $config['landing_page'] = "billing";
            $config['cmd'] = '_cart';
            $this->load->library('paypal',$config);

            #$this->paypal->add(<name>,<price>,<quantity>[Default 1],<code>[Optional]);


            $room_name = unserialize($r->room_name);
            $lang = $this->session->userdata('lang');

            $day1 = date('Y-m-d', strtotime($r->check_in));
            $day2 = date('Y-m-d', strtotime($r->check_out));
            $day1 = date_create($day1);
            $day2 = date_create($day2);
            $days = date_diff($day1, $day2);

            $price = $r->room_price * (int)$days->d;

            $this->paypal->add("Booking ID #".sprintf("%05d",$r->booking_id)." Room ". $room_name[$lang].' ('.$r->room_price.' '.line('per night').' ) * '.$days->d.' '.line('days'),$r->room_price, $days->d);

//$1CfI0EgEr


            $this->paypal->pay(); //Proccess the payment


        } else {
            redirect('');
        }

    }

    public function success($token)
    {
        $rs = $this->checkToken($token);
        $booking_id = $rs->booking_id;
        $this->db->where('booking_id', $booking_id)->update('booking', array( 'booking_status' => 'active'));
        $this->render('booking/success');
    }

    public function cancel($token)
    {
        $rs = $this->checkToken($token);
        $booking_id = $rs->booking_id;
        $this->db->where('booking_id', $booking_id)->update('booking', array( 'booking_status' => 'cancel'));
        redirect('');
    }

    public function ipn_listen()
    {
        header('HTTP/1.1 200 OK');

        // STEP 1: read POST data
        // Reading POSTed data directly from $_POST causes serialization issues with array data in the POST.
        // Instead, read raw POST data from the input stream.
        $raw_post_data = file_get_contents('php://input');
        $raw_post_array = explode('&', $raw_post_data);
        $myPost = array();
        foreach ($raw_post_array as $keyval) {
          $keyval = explode ('=', $keyval);
          if (count($keyval) == 2)
            $myPost[$keyval[0]] = urldecode($keyval[1]);
        }
        // read the IPN message sent from PayPal and prepend 'cmd=_notify-validate'
        $req = 'cmd=_notify-validate';
        if (function_exists('get_magic_quotes_gpc')) {
          $get_magic_quotes_exists = true;
        }
        foreach ($myPost as $key => $value) {
          if ($get_magic_quotes_exists == true && get_magic_quotes_gpc() == 1) {
            $value = urlencode(stripslashes($value));
          } else {
            $value = urlencode($value);
          }
          $req .= "&$key=$value";
        }

        // Step 2: POST IPN data back to PayPal to validate
       // $ch = curl_init('https://ipnpb.paypal.com/cgi-bin/webscr');
        $ch = curl_init('https://ipnpb.paypal.com/cgi-bin/webscr');
        curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $req);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($ch, CURLOPT_FORBID_REUSE, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Connection: Close'));
        // In wamp-like environments that do not come bundled with root authority certificates,
        // please download 'cacert.pem' from "http://curl.haxx.se/docs/caextract.html" and set
        // the directory path of the certificate as shown below:
        // curl_setopt($ch, CURLOPT_CAINFO, dirname(__FILE__) . '/cacert.pem');
        if ( !($res = curl_exec($ch)) ) {
          // error_log("Got " . curl_error($ch) . " when processing IPN data");
          curl_close($ch);
          exit;
        }
        curl_close($ch);

        // inspect IPN validation result and act accordingly
        if (strcmp ($res, "VERIFIED") == 0) {
            $_key = '';
            $data = array();
            foreach( $_POST as $key => $val) {
                $data[$key] = $val;
            }
            $this->db->set('date_create', 'NOW()', false)->insert('ipn_listen', array(
                'posted_info' => serialize($data)
            ));


            $rs = $data;
            $id = explode('INV-', $rs['invoice']);
            $txt_id = $rs['txn_id'];
            $id = (int)$id[1];
            $this->db->set('pay_date', 'NOW()', false)->where('booking_id', $id)->update('booking', array(
                'booking_status' => 'active',
                'total_price' => $rs['mc_gross_1'],
                'tx' => $txt_id,
            ));



        } else if (strcmp ($res, "INVALID") == 0) {
          // IPN invalid, log for manual investigation
           // echo 'INVALID';
        }


    }

    public function testx()
    {
       $rs = $this->db->select('posted_info')->get('ipn_listen')->row();
       $rs = unserialize($rs->posted_info);
       echo '<pre>';
       $id = explode('INV-', $rs['invoice']);
       echo (int)$id[1];
       print_r($rs);
    }

    public function ipn($token)
    {
        $postFields = "cmd=_notify-validate";
        $post = $this->input->post();

        foreach($post as $key =>$value){
            $postFields.="&$key=".urlencode($value);
        }
        $url = "https://www.paypal.com/cgi-bin/websrc";
        $ch = curl_init();
        curl_setopt_array($ch, array(
            CURLOPT_URL=>$url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYPEER =>false,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $postFields
        ));
        $result = curl_exec($ch);
        curl_close($ch);
            //invoice , txn_id payment_status
        if($result=="VERIFIED"){

            $rs = $this->checkToken($token);

            $booking_id = $rs->booking_id;
            $tx = $this->input->post("txn_id");
            $this->db->where("booking_id",$rs->booking_id)->update("booking",array("tx"=>$tx,"book_status"=>"active"));

        }

        echo $result;

    }

    protected function checkToken($token)
    {
        $r = $this->db->where('token', $token)->get('booking');
        return $r->row();
    }
}