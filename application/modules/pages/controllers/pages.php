<?php
if (!defined('BASEPATH'))  exit('No direct script access allowed');

class Pages extends MX_Controller {
    private $breadcrumb = array();
    private $user_info;

    function __construct() {
        parent::__construct();
        // display template
        $this->common->check_logged_in();
        $this->template->write_view("menu_top", "menu_top"); // choose menu
        $this->breadcrumb[] = array('Administrator', 'pages'); // breadcrumb 
    }

    public function index() {
        $this->template->write("title","Pages Manager");
        $this->template->show_messages();
        
        $data = array('data' => null);
        $this->template->write_view("content","page-index",  $data);
        $this->template->render(); 
        
    }
}

/* End of file pages.php */
/* Location: ./application/modules/page/controllers/pages.php */