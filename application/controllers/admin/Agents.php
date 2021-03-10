<?php

use app\services\utilities\Date;

defined('BASEPATH') or exit('No direct script access allowed');

class Agents extends AdminController
{

    public function list(){

         $this->db->select('*');

         $this->db->from('tblcontacts');
         $this->db->join('tblagent_next_of_kin', 'tblcontacts.userid = tblagent_next_of_kin.fk_agent_id');
         $this->db->order_by("id", "DESC");
         $agents = $this->db->get()->result_array();
        
         $data['agents'] =  $agents;
      

         $data['title'] = _l('Business Partners');
         $this->load->view('admin/agents/list', $data);
       
        
    }

    public function updateBalance(){

        
        $this->db->set('wallet_balance', $this->input->post('new-balance'), FALSE);
        $this->db->where('userid', $this->input->post('userid'));
        $this->db->update('tblcontacts'); // gives UPDATE mytable SET field = field+1 WHERE id = 2
        redirect($_SERVER['HTTP_REFERER']);
    }
    
}



