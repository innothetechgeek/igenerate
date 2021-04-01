<?php

class Migration_Version_289 extends CI_Migration
{
      public function up(){


            $fields = array(

                  'lead_type' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '200',
                  ),

            );

            $this->dbforge->add_column('leads', $fields);

      }

      public function down(){

            

      }


}