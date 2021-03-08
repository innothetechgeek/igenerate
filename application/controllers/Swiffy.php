<?php

defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . 'libraries/REST_Controller.php';
//use Restserver\Libraries\REST_Controller;
     
class Swiffy extends REST_Controller {
    
	  /**
     * Get All Data from this method.
     *
     * @return Response
    */
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
     }

     //notify the system of the payment
     public function index_post(){
 
 
         //update payment status so the person can be able to log into the system
         $this->db->set('payment_received', 1);
         $this->db->where('id', 1);
         $this->db->update('tblcontacts');

         $entityBody = file_get_contents('php://input');
 
         file_put_contents("test2.txt",$entityBody);
 
         //var_dump(write_file(base_url()."assets/log.txt", 'hello'));
 
     }


}