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
 
 
       
        $response = file_get_contents('php://input');

         if($response->payment_status == 1){

            //update payment status so the person can be able to log into the system
            $this->db->set('payment_received', 1);

           

            $response = json_decode($response);
            $this->db->where('idnumber',  $response->payment_reference);
            $this->db->update('tblcontacts');


         }

         file_put_contents("test2.txt",$response);
 
         //var_dump(write_file(base_url()."assets/log.txt", 'hello'));
 
     }


}