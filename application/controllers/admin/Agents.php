<?php

use app\services\utilities\Date;

defined('BASEPATH') or exit('No direct script access allowed');

class Agents extends AdminController
{

    public function list(){

         $this->db->select('*');

         $this->db->from('tblcontacts');
         $this->db->where('contact_type', 'agent');
         $agents = $this->db->get()->result_array();
         $data['agents'] =  $agents;
      

         $data['title'] = _l('Business Partners');
         $this->load->view('admin/agents/list', $data);
       
        
    }
    
}



