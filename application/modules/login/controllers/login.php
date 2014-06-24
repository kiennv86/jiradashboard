<?php
if (!defined('BASEPATH'))  exit('No direct script access allowed');

class Login extends MX_Controller {

    function __construct() {
        parent::__construct();
        // display template
        $this->template->set_template('template_login');
    }

    public function index() {
        $this->template->write("title","Login to system");
        $this->template->show_messages();
        
        $data = array('data' => null);
        $this->template->write_view("content","login-index",  $data);
        $this->template->render(); 
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */