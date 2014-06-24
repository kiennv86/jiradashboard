<?php
if (!defined('BASEPATH'))  exit('No direct script access allowed');

class Admin extends MX_Controller {
    private $breadcrumb = array();
    private $user_info;

    function __construct() {
        parent::__construct();
        // display template
        $this->common->check_logged_in();
        $this->template->write_view("menu_top", "menu_top"); // choose menu
        $this->breadcrumb[] = array('Administrator', 'category'); // breadcrumb 
    }

    public function index() {
        $this->template->write("title","Administrator");
        $this->template->show_messages();
        
        $data = array('data' => null);
        $this->template->write_view("content","admin-index",  $data);
        $this->template->render(); 
        
    }
}

/* End of file admin.php */
/* Location: ./application/modules/admin/controllers/admin.php */