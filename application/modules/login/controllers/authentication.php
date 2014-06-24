<?php

class Authentication extends CI_Controller
{
    function __construct() {
        parent::__construct();
    }
    /**
     * @author Kien Nguyen <kiennv86@.gmailcom>
     * @description : Check login and reditect to page access
     */
    public function checklogin(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        
        //This method will have the credentials validation
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');
        if($this->form_validation->run() == FALSE)
        {
          //Field validation failed.  User redirected to login page
            $msg = $this->lang->line("LOGIN_FAIL");
            $this->common->set_message($msg,'error');
            $uri = base_url().'login/index';
        }
        else
        {
          //Go to private area
            $msg = $this->lang->line("LOGIN_SUCCESS");
            $this->common->set_message($msg, 'success');
            $uri = base_url().'admin/index';
        }
        redirect($uri);
    }

    
    public function check_database($password)
    {
        //Field validation succeeded.  Validate against database
        $username = $this->input->post('user_name');

        //query the database
        $this->load->model('User_Model');
        
        $result = $this->User_Model->login($username, $password);
        if($result)
        {
          $sess_array = array();
          foreach($result as $row)
          {
            $sess_array = array(
              'user_id' => $row->user_id,
              'user_name' => $row->user_name
            );
            $this->session->set_userdata('logged_in', $sess_array);
          }
          return TRUE;
        }
        else
        {
          $this->common->set_message('check_database', 'Invalid username or password');
          return false;
        }
     }
}