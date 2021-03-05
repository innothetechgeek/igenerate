<?php

defined('BASEPATH') or exit('No direct script access allowed');


class Swiffy extends ClientsController{
    

    //notify the system of the payment
    public function notify(){


        //update payment status so the person can be able to log into the system
        $this->db->set('payment_received', 1);
        $this->db->where('id', 1);
        $this->db->update('tblcontacts');

        file_put_contents("test.txt", 'notify url hit');

        //var_dump(write_file(base_url()."assets/log.txt", 'hello'));

    }



}