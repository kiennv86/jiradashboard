<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');


/**
 * Description of common : this is library class common function public all module
 * using  : $this->common->to_function()
 *
 * @author Kien Nguye <kiennv86@gmail.com>
 */
class CI_Common
{
    var $CI;

    /**
     * load lib
     */
    function __construct()
    {
        $this->CI =& get_instance();
    }

    /**
     * Set session message
     * @param type $ms : is massages
     * @param type $type : error or warning or success is default
     */
    public function set_message($ms = '', $type = 'success')
    {
        $this->CI->load->library('session');
        if (isset($ms) && $ms !== FALSE) {
            switch ($type) {
                case 'error':
                    $type = 'error';
                    break;
                case 'warning':
                    $type = 'warning';
                    break;
                default :
                    $type = 'success';
                    break;
            }
            $this->CI->session->set_flashdata('messages_data', $ms);
            $this->CI->session->set_flashdata('messages_type', $type);
        }
    }

    public function check_logged_in()
    {
        $this->CI->load->library('session');
        $userdata = $this->CI->session->all_userdata();
        if ($userdata) {
            if (!$userdata['logged_in']) {
                // if not logged in yet
                // redirect to login page
                $msg = $this->CI->lang->line("PERMISSION_DENIED");
                $this->set_message($msg, 'error');
                redirect(base_url() . 'login');
            }
        }
    }

    public function get_current_user()
    {
        $this->CI->load->library('session');
        $this->CI->load->database();
        $userdata = $this->CI->session->all_userdata();
        $userid = 0;
        if (isset($userdata['logged_in'])) {
            if (is_array($userdata['logged_in'])) {
                $userid = $userdata['logged_in']['user_id'];
            }
        }

        if ($userid) {
            $sql = "SELECT u.* FROM users u WHERE user_id=" . $userid;
            $query = $this->CI->db->query($sql);
            return $query->row();
        } else {
            return false;
        }
    }
}

?>
