
<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Igenadmin extends ClientsController
{

    public function business_partners(){

        $this->load->view('igen_admin/agents');

    }
    
}
 