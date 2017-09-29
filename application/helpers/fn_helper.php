<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function get_seo()
{
    $ci =& get_instance();
    $config = $ci->db->select('title, description, keywords')->get('config')->row();
    $title = unserialize($config->title);
    $content = unserialize($config->description);
    $keywords = unserialize($config->keywords);

    $lang = $ci->session->userdata('lang');
    $lang = $lang=='th'?'th':'en';


    if ($ci->uri->segment(1)=='room' && $ci->uri->segment(2)=='item') {
        $rs = $ci->db->select('seo_title, seo_description, seo_keywords')->where('room_id', $ci->uri->segment(3))->get('rooms');
        if ($rs->num_rows()>0) {
            if ($rs->row()->seo_title!='') {
                $title = unserialize($rs->row()->seo_title);
                $content = unserialize($rs->row()->seo_description);
                $keywords =unserialize($rs->row()->seo_keywords);
            }
        }
    }

    $lang = $lang=='th'?'th':'en';

    $title = $title[$lang];
    $content = $content[$lang];
    $keywords = $keywords[$lang];

    if ($ci->uri->segment(1)=='room' && $ci->uri->segment(2)=='category') {
        if ($ci->uri->segment(3)!='') {
        	$title = line('our rooms');
        } else {
            $title = line('our rooms').' '.$title;
        }
    }





    return '<title>'.$title.'</title><meta name="description" content="'.$content.'"/><meta name="keywords" content="'.$keywords.'"/>';
}
function get_path_image($product_id)
{
	$ci =& get_instance();
	$rs = $ci->db->where('product_id', $product_id)->limit(1)->get('product_gallery')->row();
	return base_url('public/upload/product/'.$rs->product_part);
}
function get_gallery()
{
    $ci =& get_instance();
    $rs = $ci->db->join('rooms', 'gallery.room_id = rooms.room_id')->limit(10)->order_by('gallery_id', 'RANDOM')->get('gallery')->result();
    return $rs;
}

function get_line()
{
    $ci =& get_instance();
    $rs = $ci->db->select('line')->get('config')->row();
    return $rs->line;
}

function get_slogan()
{
    $ci =& get_instance();
    $lang = $ci->session->userdata('lang');
    $lang = $lang=='th'?'th':'en';
    $rs = $ci->db->select('slogan')->get('config')->row();
    $text = unserialize($rs->slogan);
    return $text[$lang];
}

function get_fb()
{
    $ci =& get_instance();
    $rs = $ci->db->select('facebook')->get('config')->row();
    return $rs->facebook;
}

function get_ig()
{
    $ci =& get_instance();
    $rs = $ci->db->select('ig')->get('config')->row();
    return $rs->ig;
}

function get_address()
{
    $ci =& get_instance();
    $lang = $ci->session->userdata('lang');
    $lang = $lang=='th'?'th':'en';
    $rs = $ci->db->select('address')->get('config')->row();
    $text = unserialize($rs->address);
    return $text[$lang];
}

function get_link_map()
{
    $ci =& get_instance();
    $rs = $ci->db->select('latitude, longtitude')->get('config')->row();
    return 'https://www.google.com/maps?q='.$rs->latitude.','.$rs->longtitude;
}


function get_lat_lng()
{
    $ci =& get_instance();
    $rs = $ci->db->select('latitude, longtitude')->get('config')->row();
    return $rs;
}

function get_category()
{
    $ci =& get_instance();
    $rs = $ci->db->get('category')->result();
    return $rs;
}


function get_product($product_id)
{
	$ci =& get_instance();
	$rs = $ci->db->where('product_id', $product_id)->limit(1)->get('product')->row();
	return $rs;
}


function get_collection($collection_id)
{
	$ci =& get_instance();
	$rs = $ci->db->join('product', 'collection_product.product_id = product.product_id')->where('collection_id', $collection_id)->get('collection_product');
	return $rs->result();
}


function get_model_items($model_id)
{
	$ci =& get_instance();
	$rs = $ci->db->where('model_id', $model_id)->join('color', 'product.color_id = color.color_id')->get('product');
	return $rs->result();

}

function get_gallery_product($product_id)
{
	$ci =& get_instance();
	$rs = $ci->db->where('product_id', $product_id)->get('product_gallery');
	return $rs->result();
}

function get_admin_name()
{
	$ci =& get_instance();
	if ($ci->session->userdata('login')!=NULL) {
		$rs = $ci->db->where('admin_id', $ci->session->userdata('login'))->get('admin');
		return $rs->row()->username;
	}
	return '';
}


function get_refer_name()
{
	$ci =& get_instance();
	if ($ci->session->userdata('member_id')!=NULL) {
		$rs = $ci->db->where('member_id', $ci->session->userdata('member_id'))->get('member');
		return $rs->row()->username;
	}
	return '';
}

function get_cart()
{
	$ci =& get_instance();
	$count = count($ci->cart->contents());
	if ($count>0) {
		return '<span class="badge">'.$count."</span>";
	}
	return '';
}

function get_point($product_id)
{
	$ci =& get_instance();
	$rs = $ci->db->where('product_id', $product_id)->get('product');
	return $rs->row()->point;
}

function get_product_point($id)
{
	$ci =& get_instance();
	$rs = $ci->db->select('SUM(product.point) as order_point')->join('product', 'orders_items.product_id = product.product_id')
			->group_by('orders_items.order_id')
			->where('order_id', $id)
			->get('orders_items');

	if ($rs->num_rows()==0){
		return 0;
	} else {
		return $rs->row()->order_point;
	}
}

function check_order_status($type)
{
	switch($type) {
		case 'confirm':
			return 'ยังไม่ชำระเงิน';
			break;
		case 'pay':
			return 'แจ้งชำระเงิน';
			break;
		case 'success':
			return 'ชำระเงินสำเร็จ';
			break;
		case 'cancel':
			return 'ยกเลิก';
			break;
		default:
			return '';
			break;
	}
}

function get_logo()
{
	$ci =& get_instance();
	$rs = $ci->db->select('logo')->get('config')->row();
	if ($rs->logo!='') {
		return $rs->logo;
	}
	return false;
}

function get_title()
{
	$ci =& get_instance();
	$title = '';
	if ($ci->uri->segment(1)=='') {
		$title = $ci->db->select('title')->get('config')->row()->title;
	} else {
		if ($ci->uri->segment(1)=='member') {
			$title = 'ส่วนงานสมาชิก';
		}
	}
	return $title;
}

function get_footer()
{
	$ci =& get_instance();
    $lang = $ci->session->userdata('lang');
    $lang = $lang=='th'?'th':'en';

	$title = $ci->db->select('footer')->get('config')->row()->footer;

    $text = unserialize($title);
    return $text[$lang];


}



function get_google()
{
	$ci =& get_instance();
	$rs = $ci->db->select('google')->get('config');
	if ($rs->row()->google!='') {
		return $rs->row()->google;
	}
	return false;
}


function get_facebook()
{
	$ci =& get_instance();
	$rs = $ci->db->select('facebook')->get('config');
	if ($rs->row()->facebook!='') {
		return $rs->row()->facebook;
	}
	return false;
}


function get_twitter()
{
	$ci =& get_instance();
	$rs = $ci->db->select('twitter')->get('config');
	if ($rs->row()->twitter!='') {
		return $rs->row()->twitter;
	}
	return false;
}

function get_product_id($product_id)
{
	$ci =& get_instance();
	$rs = $ci->db->where('product_id', $product_id)->get('product');
	return $rs->row();
}

function get_email()
{
	$ci =& get_instance();
	$email = '';
	//if ($ci->uri->segment(1)=='') {
		$email = $ci->db->select('email')->get('config')->row()->email;
	//} else {
	//}
	return $email;
}


function get_mobile()
{
	$ci =& get_instance();
	$mobile = '';
//	if ($ci->uri->segment(1)=='') {
		$mobile = $ci->db->select('mobile')->get('config')->row()->mobile;
//	} else {
//	}
	return $mobile;
}

function get_description()
{
	$ci =& get_instance();
	$description = '';
	if ($ci->uri->segment(1)=='') {
		$description = $ci->db->select('description')->get('config')->row()->description;
	} else {
	}
	return $description;
}

function get_keywords()
{
	$ci =& get_instance();
	$keywords = '';
	if ($ci->uri->segment(1)=='') {
		$keywords = $ci->db->select('keywords')->get('config')->row()->keywords;
	} else {
	}
	return $keywords;
}


function parseTree($tree, $root = 0) {
    $return = array();
    # Traverse the tree and search for direct children of the root
    foreach($tree as $child => $parent) {
        # A direct child is found
        if($parent['parent_id'] == $root) {
            # Remove item from tree (we don't need to traverse this again)
            unset($tree[$child]);
            # Append the child into result array and parse its children
            $return[] = array(
            	'member_id' => $child,
                'name' => $parent['name'],
                'username' => $parent['username'],
                'position' => $parent['position'],
                'children' => parseTree($tree, $child)
            );
        }
    }
    return empty($return) ? null : $return;
}

function printtree($tree) {
    if(!is_null($tree) && count($tree) > 0) {
        echo '<ul>';
        foreach($tree as $b) {
        	$ex = explode(' ', $b['name']);
        	$name = $ex[0].'<br>'.$ex[1];
            $name = $b['username'];
            $position = $b['position'];

            echo '<li class="'.$b['position'].'">'.'<a href="javascript:void(0);">'.$name.'<br>'.$position.'</a>';
            printtree($b['children']);
            echo '</li>';
        }
        echo '</ul>';
    }
}


function get_price($product_id)
{
    $ci =& get_instance();
    $product = $ci->db->where('product_id', $product_id)->get('product')->row();
    $price = $product->price;
    $member_id = $ci->session->userdata('member_id');
    if ($member_id!=NULL) {
        $rs = $ci->db->where('member_id', $member_id)->get('member');

        if ($rs->num_rows()>0) {
            if ($rs->row()->verify==1) {
               // $price = $price - (($price * 10) / 100);

                if ($product->type_product=='factory') {
                    $price = $price - (($price * 10) / 100);
                }

            }
        }
    }
    return $price;
}


function get_point_aff($product_id, $tag1 = '', $tag2 = '')
{
    $ci =& get_instance();
    $product = $ci->db->where('product_id', $product_id)->get('product')->row();
    $proint = 0;
    $aff = 0;
    $member_id = $ci->session->userdata('member_id');
    $msg = $msg = '<p style="height: 63px; margin-top:0px; padding:0px;">Point : '.$product->point.' points';

    if ($member_id!=NULL) {
        $rs = $ci->db->where('member_id', $member_id)->get('member');

        if ($rs->num_rows()>0) {
            if ($rs->row()->verify==1) {
               $msg .= '<br>Level Point : '.$product->point.' points';
               $msg.= '<br>Affiliate : '.$product->aff1_point.' %';
            }
        }
    }
    $msg .='</p>';
    return $msg;
}

function line($text) {
	 $ci =& get_instance();
	 //return $ci->lang->line($text)?$ci->lang->line($text):$text;
     $lang = $ci->session->userdata('lang');
     $lang = $lang=='th'?'th':'en';
     $rs = $ci->db->where('name', $text)->get('lang_static');
     if ($rs->num_rows()>0) {
        $data = $rs->row()->data;
        $data = unserialize($data);
        return $data[$lang];
     }
     return $text;
}

function title()
{
     $ci =& get_instance();
     $lang = $ci->session->userdata('lang');
     $title = get_title();
     $lang = $lang=='th'?'th':'en';
     $title = unserialize($title);
     return $title[$lang];
}
function getMemberName()
{
    $ci =& get_instance();
    $r = $ci->db->where('member_id', $ci->session->userdata('member_id'))->get('member');
    if ($r->num_rows()>0) {
        return $r->row()->name;
    }
    return '';
}

function isMemberLogin()
{
    $ci =& get_instance();
    $r = $ci->db->where('member_id', $ci->session->userdata('member_id'))->get('member');
    if ($r->num_rows()>0) {
        return true;
    }
    return false;
}

function lang()
{
    $ci =& get_instance();
    $lang = $ci->session->userdata('lang');
    $lang = $lang=='th'?'th':'en';
    return $lang;
}

function getPromotionBanner()
{
    $ci =& get_instance();
    $rs = $ci->db->order_by('content_id', 'DESC')
    ->join('rooms', 'content.room_id = rooms.room_id', 'LEFT')
    ->where('content_type', 'promotion')
    ->limit(3)
    ->get('content')->result();

    return $rs;
}

function getLink($room_id)
{
    $ci =& get_instance();
    $rs = $ci->db->where('room_id', $room_id)->get('rooms');
    if ($rs->num_rows()==0) {
        return site_url();
    } else {
        if ($rs->row()->link!='') {
            return $rs->row()->link;
        } else {
            return site_url('tour/id/'.$room_id);
        }
    }
}