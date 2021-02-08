<?php
defined('BASEPATH') or die('No direct script access allowed!');

class Layout
{
    public function load($layout, $page, $data = [], $return = FALSE)
    {
        date_default_timezone_set('Asia/Jakarta');
        $CI = &get_instance();
        $page_data['content'] = $CI->load->view($page, $data, TRUE);
        return $CI->load->view($layout, $page_data, $return);
    }
}
