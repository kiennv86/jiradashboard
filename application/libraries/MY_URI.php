<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class MY_URI extends CI_URI
{

    public function __construct()
    {
        parent::CI_URI();
    }

    public function segment($n, $no_result = FALSE)
    {
        if (is_string($n) && ($key = array_search($n, $this->segments)) !== false) {
            $n = $key + 1;
        }
        return (!isset($this->segments[$n])) ? $no_result : $this->segments[$n];
    }

    public function rsegment($n, $no_result = FALSE)
    {
        if (is_string($n) && ($key = array_search($n, $this->rsegments)) !== false) {
            $n = $key + 1;
        }
        return (!isset($this->rsegments[$n])) ? $no_result : $this->rsegments[$n];
    }

    public function slash_segment($n, $where = 'trailing')
    {
        if (is_string($n) && ($key = array_search($n, $this->segments)) !== false) {
            $n = $key + 1;
        }
        return $this->_slash_segment($n, $where, 'segment');
    }

    public function slash_rsegment($n, $where = 'trailing')
    {
        if (is_string($n) && ($key = array_search($n, $this->rsegments)) !== false) {
            $n = $key + 1;
        }
        return $this->_slash_segment($n, $where, 'rsegment');
    }
} 