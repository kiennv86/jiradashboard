<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Pagination Config
 * 
 * Just applying codeigniter's standard pagination config with twitter 
 * bootstrap stylings
 * 
 * @license		http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 * @link		http://codeigniter.com/user_guide/libraries/pagination.html
 * @file		pagination.php
 */
 
// --------------------------------------------------------------------------
 
// $config['base_url'] = '';
$config['per_page'] = 2;
$config['uri_segment'] = 3;
$config['num_links'] = 4;
$config['page_query_string'] = FALSE;
$config['use_page_numbers'] = TRUE;
$config['query_string_segment'] = 'page';
 
$config['full_tag_open'] = '<div class="pagination"><ul>';
$config['full_tag_close'] = '</ul></div><!--pagination-->';
 
$config['first_link'] = '&laquo;Trang đầu';
$config['first_tag_open'] = '<li class="Trang trước">';
$config['first_tag_close'] = '</li>';
 
$config['last_link'] = 'Trang cuối &raquo;';
$config['last_tag_open'] = '<li class="Trang tiếp">';
$config['last_tag_close'] = '</li>';
 
$config['next_link'] = 'Trang tiếp &rarr;';
$config['next_tag_open'] = '<li class="next page">';
$config['next_tag_close'] = '</li>';
 
$config['prev_link'] = '&larr; Trở lại';
$config['prev_tag_open'] = '<li class="prev page">';
$config['prev_tag_close'] = '</li>';
 
$config['cur_tag_open'] = '<li class="active"><a href="">';
$config['cur_tag_close'] = '</a></li>';
 
$config['num_tag_open'] = '<li class="page">';
$config['num_tag_close'] = '</li>';
 
$config['display_pages'] = TRUE;

// 
$config['anchor_class'] = 'follow_link';
 
// --------------------------------------------------------------------------
 
/* End of file pagination.php */
/* Location: ./bookymark/application/config/pagination.php */