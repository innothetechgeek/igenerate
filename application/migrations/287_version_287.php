<?php

class Migration_Version_287 extends CI_Migration
{
      public function up(){


            $fields = array(
                  'gender' => array('type' => 'TEXT')
            );

            $this->dbforge->add_column('contacts', $fields);

      }

      public function down(){

            

      }


}