<?php

class Migration_Version_285 extends CI_Migration
{
      public function up(){


            $fields = array(
                  'payment_received' => array('type' => 'TEXT')
            );

            $this->dbforge->add_column('contacts', $fields);

      }

      public function down(){

            

      }


}