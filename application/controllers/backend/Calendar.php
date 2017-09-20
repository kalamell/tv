<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calendar extends Backend_Controller {
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->_render('calendar/index', $this);
    }

    public function feed()
    {
        $sql = 'SELECT * FROM booking INNER JOIN rooms ON booking.room_id = rooms.room_id WHERE DATE(check_in) BETWEEN ? AND ?';

        $start_date = $this->input->get('start');
        $end_date = $this->input->get('end');
        $rs = $this->db->query($sql, array( $start_date, $end_date))->result();
        $ar = array();

        foreach($rs as $r) {
            $color = '#00a65a';
            $textcolor = '#000000;';
            $text = '';
            if ($r->booking_status=='pending') {
                $color = 'gray';
                $textcolor = '#ffffff';
                $text = '*ยังไม่ยืนยัน';
            }

            $textcolor = '#000000;';
            if ($r->booking_status=='cancel') {
                $color = 'red';
                $textcolor = '#ffffff';
                $text = '*ยกเลิก';
            }
            $ar[] = array(
                'allDay' => '',
                'title' => 'ห้อง '.$r->room_name." \n( ผู้จอง ".$r->name.' '.$r->mobile.')'."\n".$text,
                'id' => $r->booking_id,
                'start' => $r->check_in,
                'end' => $r->check_out,
                'color' => $color,
                'textColor' => $textcolor
            );
        }
        echo json_encode($ar);
    }
}
