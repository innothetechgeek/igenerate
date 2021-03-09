<?php

class Migration_Version_286 extends CI_Migration
{
      public function up(){


            $fields = array(
                  'wallet_balance' => array('type' => 'TEXT')
            );

            $this->dbforge->add_column('contacts', $fields);

      }

      public function down(){

            

      }


}