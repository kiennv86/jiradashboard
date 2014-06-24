<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Logout extends MX_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->session->set_userdata('logged_in', null);
        redirect(base_url() . 'login');
    }


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */